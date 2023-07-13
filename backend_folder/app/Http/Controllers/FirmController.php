<?php

namespace App\Http\Controllers;
use App\Models\Firm;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Service;
use App\Models\Rating;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class FirmController extends Controller
{
    //create form
    public function create()
    {
        $firm = Firm::all(); // Retrieve all data from the Firm model

        return view('firm_form', compact('firm')); // Return the view 'firm_form' with the retrieved data
    }
    

//show the firm data for backend
    public function showData()
{
     // Retrieve all firms and order them by average rating in descending order
     $firms = Firm::withCount('ratings')->orderByDesc('ratings_count')->get();

     // Rank the firms based on the sort order
     $rankedFirms = $firms->map(function ($firm, $index) {
         $firm->rank = $index + 1;
         return $firm;
     });
 

    return view('firm_data', compact('rankedFirms'));
}
//show all firm data
public function showDataFirm()
{
    // Retrieve all firms and order them by average rating in descending order
    $firms = Firm::withCount('ratings')->orderByDesc('ratings_count')->get();

    // Rank the firms based on the sort order
    $rankedFirms = $firms->map(function ($firm, $index) {
        $firm->rank = $index + 1;
        return $firm;
    });

    return view('law_firm', compact('rankedFirms'));
}


public function store(Request $request)
{
    // Check if the user has already submitted the form
    if ($request->user()->has_submitted_form) {
        return redirect()->back()->with('error', 'You have already submitted the form.'); // Redirect back with an error message
    }

    // Validate the form data
    $validatedData = $request->validate([
        'firm_name' => 'required',
        'firm_email' => 'required|email',
        'firm_phonenumber' => 'required',
        'firm_address' => 'required',
        'firm_file' => 'required',
        'firm_information' => 'required',
    ]);

    // Get the logged-in user's ID
    $userId = $request->user()->id;

    // Create a new Firm model instance and set its properties
    $firm = new Firm;
    $firm->firm_name = $validatedData['firm_name'];
    $firm->firm_email = $validatedData['firm_email'];
    $firm->firm_phonenumber = $validatedData['firm_phonenumber'];
    $firm->firm_address = $validatedData['firm_address'];
    $firm->firm_file = $validatedData['firm_file'];
    $firm->firm_information = $validatedData['firm_information'];
    $firm->user_id = $userId; // Set the user_id column

    // Save the firm data to the database
    $firm->save();

    // Update the has_submitted_form column for the user to indicate they have submitted the form
    $request->user()->update(['has_submitted_form' => true]);

    // Redirect to the firm_profile route with the newly created firm's ID
    return redirect()->route('firm_profile', ['id' => $firm->id])->with('success', 'Firm data has been successfully stored.');
}
//show on firm base on user login 
// public function show(Request $request)
// {
//     $user = $request->user();

//     if (!$user->has_submitted_form) {
//         return redirect()->back()->with('error', 'You have not submitted the form yet.'); // Redirect back with an error message
//     }

//     $firm = Firm::where('user_id', $user->id)->first();

//     return view('firm_profile', compact('firm'));
// }

public function show(Request $request)
{
    $user = $request->user();

    if (!$user->has_submitted_form) {
        return redirect()->back()->with('error', 'You have not submitted the form yet.'); // Redirect back with an error message
    }

    $firm = Firm::where('user_id', $user->id)->first();

    $services = Service::where('firm_id', $firm->id)->get();

    return view('firm_profile', compact('firm', 'services'));
}

//show each firm
public function showEachFirm($id)
{
    $firm = Firm::find($id);

    if (!$firm) {
        return redirect()->back()->with('error', 'Firm not found.');
    }
    
    // Get the services related to the firm
    $services = Service::where('firm_id', $firm->id)->get();

    // Get the ratings related to the firm with the associated user names
    // Get the ratings related to the firm with the associated user names
$ratings = Rating::where('firm_id', $firm->id)
->with('user:id,name') // Eager load the user relationship with only the id and name columns
->get(['id', 'comment', 'rating', 'user_id']); // Include the user_id column in the result

$ratingCount = Rating::where('firm_id', $firm->id)->count();

return view('firm', compact('firm', 'services', 'ratings', 'ratingCount'));

}

// new show firm for backend
public function showEachFirmBackend($id)
{
    $firm = Firm::find($id);

    if (!$firm) {
        return redirect()->back()->with('error', 'Firm not found.');
    }
    
    // Get the services related to the firm
    $services = Service::where('firm_id', $firm->id)->get();

    // Get the ratings related to the firm with the associated user names
$ratings = Rating::where('firm_id', $firm->id)
->with('user:id,name') // Eager load the user relationship with only the id and name columns
->get(['id', 'comment', 'rating', 'user_id']); // Include the user_id column in the result

$ratingCount = Rating::where('firm_id', $firm->id)->count();

return view('service_and_rating_data', compact('firm', 'services', 'ratings', 'ratingCount'));

}

//destroy firm
public function destroy($id)
{
    // Find the firm by the given ID
    $firm = Firm::find($id);

    // Check if the firm exists
    if (!$firm) {
        return redirect()->back()->with('error', 'Firm not found.');
    }

    // Delete the firm
    $firm->delete();

    // Redirect to the appropriate page or return a response
    return redirect()->back()->with('success', 'Firm deleted successfully.');
}

//delete rating
public function destroyRating($id)
{
    $rating = Rating::find($id);

    if (!$rating) {
        return redirect()->back()->with('error', 'Rating not found.');
    }

    $rating->delete();

    return redirect()->back()->with('success', 'Rating deleted successfully.');
}
//delete service
public function destroyService($id)
{
    $service = Service::find($id);

    if (!$service) {
        return redirect()->back()->with('error', 'Service not found.');
    }

    $service->delete();

    return redirect()->back()->with('success', 'Service deleted successfully.');
}



//rating star
public function rate(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'rating' => 'required|integer|between:1,5',
        'comment' => 'nullable|string|max:255',
    ]);

    // Find the firm by ID
    $firm = Firm::findOrFail($id);
    // Retrieve the authenticated user's ID
    $user_id = auth()->id();

    // Create a new rating instance
    $rating = new Rating();
    $rating->user_id = $user_id;
    $rating->firm_id = $firm->id;
    $rating->user_id = $request->user()->id;
    $rating->rating = $validatedData['rating'];
    $rating->comment = $validatedData['comment'];
    $rating->save();

    // Perform any additional actions (e.g., update average rating for the firm)

    // Return a response or redirect as needed
    return response()->json(['message' => 'Rating submitted successfully']);
}

public function submitRating(Request $request, Firm $firm)
{
    // Retrieve the authenticated user's ID
    $user_id = auth()->id();

    $rating = new Rating();
    $rating->user_id = $user_id;
    $rating->firm_id = $firm->id;
    $rating->rating = $request->input('rating');
    $rating->comment = $request->input('comment');
    $rating->save();

    // Redirect back to the firm page
    return redirect()->back()->with('success', 'Rating submitted successfully.');
}

//show all review data base on firm id
public function showAllReviewData()
{
    // Retrieve all ratings with associated user details
    $ratings = Rating::with('user:id,name')->get();
    $firmId = 1; // Replace with the actual firm ID
    $services = Service::where('firm_id', $firmId)
    ->with('firm:id,firm_name')
    ->get();
    // Pass the review data and firm ID to the view
    return view('review_data', compact('ratings', 'firmId', 'services'));
}




//show dashboard
public function dashboard(){
    return view('dashboard');
}



// public function destroyUser($id)
// {
//     // Find the user by ID
//     $user = User::findOrFail($id);

//     // Delete associated firm records, service records, and rating records
//     $firms = Firm::where('user_id', $user->id)->get();

//     foreach ($firms as $firm) {
//         // Delete associated service records
//         Service::where('firm_id', $firm->id)->delete();

//         // Delete the firm record
//         $firm->delete();
//     }

//     // Delete associated rating records
//     Rating::where('user_id', $user->id)->delete();

//     // Delete the user
//     $user->delete();

//     return redirect()->back()->with('success', 'User deleted successfully');
// }

// public function countFirm()
// {
//     $firmCounts = Firm::count(); // Count the number of firms

//     return view('dashboard', compact('firmCounts'));
// }

// Show user registration data
public function showUserData()
{
    $users = User::whereHas('roles', function ($query) {
        $query->where('name', 'user');
    })->get(); // Retrieve users with the 'user' role

    return view('user_data', compact('users')); // Pass the users data to the 'user_data' view
}

// Show firm provider registration data
public function showFirmProviderRoleData()
{
    $users = User::whereHas('roles', function ($query) {
        $query->where('name', 'firm_provider');
    })->get(); // Retrieve users with the 'firm_provider' role

    return view('firm_provider_data', compact('users')); // Pass the users data to the 'firm_provider_data' view
}

// Show admin and super admin registration data
public function showAdminRoleData()
{
    $loggedInUser = Auth::user(); // Get the logged-in user
    $users = User::query();

    if ($loggedInUser->hasRole('super_admin')) {
        $users->whereHas('roles', function ($query) {
            $query->whereIn('name', ['admin', 'super_admin']);
        }); // Retrieve users with 'admin' or 'super_admin' roles if the logged-in user is a 'super_admin'
    } else {
        $users->whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        }); // Retrieve users with 'admin' role if the logged-in user is not a 'super_admin'
    }

    $users = $users->get(); // Get the final list of users

    return view('admin_data', compact('users')); // Pass the users data to the 'admin_data' view
}


// Ban a user
public function ban($id)
{
    $user = User::findOrFail($id); // Find the user with the given ID
    $user->active = false; // Set the 'active' flag to false
    $user->save(); // Save the updated user

    return redirect()->back()->with('success', 'User banned successfully'); // Redirect back with success message
}

// Unban a user
public function unban($id)
{
    $user = User::findOrFail($id); // Find the user with the given ID
    $user->active = true; // Set the 'active' flag to true
    $user->save(); // Save the updated user

    return redirect()->back()->with('success', 'User unbanned successfully'); // Redirect back with success message
}



// //firm ban
// public function banFirm($id)
// {
//     $firm = Firm::findOrFail($id);
//     $firm->firm_active = false;
//     $firm->save();

//     return redirect()->back()->with('success', 'Firm banned successfully');
// }
// //firm unban
// public function unbanFirm($id)
// {
//     $firm = Firm::findOrFail($id);
//     $firm->firm_active = true;
//     $firm->save();

//     return redirect()->back()->with('success', 'Firm unbanned successfully');
// }

// Firm ban
public function banFirm($id)
{
    $firm = Firm::findOrFail($id);
    $firm->firm_active = false; // Set the firm_active flag to false (banned)
    $firm->save(); // Save the updated firm

    return redirect()->back()->with('success', 'Firm banned successfully');
}

// Firm unban
public function unbanFirm($id)
{
    $firm = Firm::findOrFail($id);
    $firm->firm_active = true; // Set the firm_active flag to true (unbanned)
    $firm->save(); // Save the updated firm

    return redirect()->back()->with('success', 'Firm unbanned successfully');
}






}