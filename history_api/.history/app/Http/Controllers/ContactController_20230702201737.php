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

use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        $contacts = Contact::all();
        
        return response()->json([
            'contacts' => $contacts
        ]);
    }



    public function showData()
    {
        $contact = Contact::all(); 

        return view('contact_data', compact('contact'));
    }

    
    public function storeData(Request $request)
    {
        if (!$request->user()) {
            return redirect()->back()->with('error', 'Please log in to submit the form.');
        }
    
        // Validate the form data
        $validatedData = $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_subject' => 'required|string|max:255',
            'contact_message' => 'required|string|max:255',
        ]);
    
        // Create a new contact model instance and set its properties
        $contact = new Contact;
        $contact->contact_name = $validatedData['contact_name'];
        $contact->contact_email = $validatedData['contact_email'];
        $contact->contact_subject = $validatedData['contact_subject'];
        $contact->contact_message = $validatedData['contact_message'];
    
        // Save the contact data to the database
        $contact->save();
    
        // Redirect back to the contact form page with a success message
        return redirect()->back()->with('success', 'Contact data has been successfully sent.');
    }
    
}
