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

    return response()->json(['firm' => $firm]); // Return the firm data as JSON response
}
    


public function showDataFirm()
{
    // Retrieve active firms and order them by average rating in descending order
    $firms = Firm::where('firm_active', 1)
        ->withCount('ratings')
        ->orderByDesc('ratings_count')
        ->get();

    // Rank the firms based on the sort order
    $rankedFirms = $firms->map(function ($firm, $index) {
        $firm->rank = $index + 1;
        return $firm;
    });

    return response()->json(['rankedFirms' => $rankedFirms]);
}



public function store(Request $request)
{
    // Check if the user has already submitted the form
    if ($request->user()->has_submitted_form) {
        return response()->json(['error' => 'You have already submitted the form.']); // Return a JSON response with an error message
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

    // Return a JSON response with the firm data and success message
    return response()->json(['firm' => $firm, 'success' => 'Firm data has been successfully stored.']);
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
        return response()->json(['error' => 'You have not submitted the form yet.']); // Return a JSON response with an error message
    }

    $firm = Firm::where('user_id', $user->id)->first();

    $services = Service::where('firm_id', $firm->id)->get();

    // Return a JSON response with the firm and services data
    return response()->json(['firm' => $firm, 'services' => $services],200);
    // return response()->json(['request' => $request], 200);
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
        return response()->json(['error' => 'You do not have permission to update this firm.']); // Return a JSON response with an error message
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

    return response()->json(['message' => 'Firm updated successfully']); // Return a JSON response with a success message
}

//show each firm
public function showEachFirm($id)
{
    $firm = Firm::find($id);

    if (!$firm) {
        return response()->json(['error' => 'Firm not found.'], 404);
    }

    // Get the services related to the firm
    $services = Service::where('firm_id', $firm->id)->get();

    // Get the ratings related to the firm with the associated user names
    $ratings = Rating::where('firm_id', $firm->id)
        ->with('user:id,name') // Eager load the user relationship with only the id and name columns
        ->get(['id', 'comment', 'rating', 'user_id']); // Include the user_id column in the result

    $ratingCount = Rating::where('firm_id', $firm->id)->count();

    return response()->json([
        'firm' => $firm,
        'services' => $services,
        'ratings' => $ratings,
        'ratingCount' => $ratingCount,
    ]);
}

}