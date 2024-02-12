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
        $contact = Contact::all(); 
        return view('contact_form',compact('contact'));
    }


    public function showData()
    {
         // Retrieve contacts where contact_read is equal to 0 (unread contacts)
        $contact = Contact::where('contact_read', 0)->get();
        // Pass the contacts to the 'contact_data' view
        return view('contact_data', compact('contact'));
    }


    public function showDataArchive()
    {
         // Retrieve contacts where contact_read is equal to 1 (read contacts)
        $contact = Contact::where('contact_read', 1)->get();
        // Pass the contacts to the 'contact_data' view
        return view('contact_archive', compact('contact'));
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
    

// Delete a contact
public function destroy(Request $request, $id)
{
    $contact = Contact::find($id); // Find the contact with the given ID

    if (!$contact) {
        return redirect()->back()->with('error', 'Rating not found.'); 
        // Redirect back with error message if contact not found
    }

    $contact->delete(); // Delete the contact

    return redirect()->back()->with('success', 'Rating deleted successfully.'); 
    // Redirect back with success message
}

// Mark a contact as read
public function markContactAsRead($id)
{
    $contact = Contact::findOrFail($id); // Find the contact with the given ID
    $contact->contact_read = true; // Set the 'contact_read' flag to true
    $contact->save(); // Save the updated contact

    return redirect()->back()->with('success', 'Contact marked as read successfully'); 
    // Redirect back with success message
}

// Mark a contact as unread
public function markContactAsUnread($id)
{
    $contact = Contact::findOrFail($id); // Find the contact with the given ID
    $contact->contact_read = false; // Set the 'contact_read' flag to false
    $contact->save(); // Save the updated contact

    return redirect()->back()->with('success', 'Contact marked as unread successfully'); 
    // Redirect back with success message
}

    


}

