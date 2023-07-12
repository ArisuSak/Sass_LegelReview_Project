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
    


    public function showData()
{
    $firm = Firm::all();

    return view('firm_data', compact('firm'));
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


//show firm profile
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

//edit firm
public function editFirm(Request $request, $id)
{
    $firm = Firm::findOrFail($id);

    // Check if the authenticated user is the owner of the firm
    if ($request->user()->id !== $firm->user_id) {
        return redirect()->back()->with('error', 'You do not have permission to edit this firm.');
    }

    return view('firm_edit', compact('firm'));
}

//update firm
public function updateFirm(Request $request, $id)
{
    $firm = Firm::findOrFail($id);

    // Check if the authenticated user is the owner of the firm
    if ($request->user()->id !== $firm->user_id) {
        return redirect()->back()->with('error', 'You do not have permission to update this firm.');
    }

    $validatedData = $request->validate([
        'firm_name' => 'nullable|string|max:255',
        'firm_address' => 'nullable|string|max:255',
        'firm_email' => 'sometimes|nullable|email',
        'firm_phonenumber' => 'nullable',
        'firm_information' => 'nullable',
        'firm_file' => 'nullable',
        // Add more validation rules for other firm fields
    ]);

    // Update only the provided fields
    $firm->fill($validatedData);
    $firm->save();

    return redirect()->route('firm-profile', $firm->id)->with('success', 'Firm updated successfully.');
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
$ratings = Rating::where('firm_id', $firm->id)
->with('user:id,name') // Eager load the user relationship with only the id and name columns
->get(['id', 'comment', 'rating', 'user_id']); // Include the user_id column in the result

$ratingCount = Rating::where('firm_id', $firm->id)->count();

return view('firm', compact('firm', 'services', 'ratings', 'ratingCount'));

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





}