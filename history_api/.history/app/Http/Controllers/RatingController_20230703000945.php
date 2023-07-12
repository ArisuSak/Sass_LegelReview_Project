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
class RatingController extends Controller
{
    public function countRatings($firmId)
{
    $ratingCount = Rating::where('firm_id', $firmId)->count();
    return response()->json(['rating_count' => $ratingCount]);
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
