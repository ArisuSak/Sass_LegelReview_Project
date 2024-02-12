<?php

namespace App\Http\Controllers;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LawyerController extends Controller
{
    public function create()
    {
        $lawyer = Lawyer::all(); // Retrieve all data from the lawyer model

        return view('lawyer_form', compact('lawyer')); // Return the view 'lawyer_form' with the retrieved data
    }
    
    public function showData()
    {
        $lawyer = Lawyer::all();

        return view('lawyer_data', compact('lawyer'));
    }
    
    public function storeData(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'lawyer_firstname' => 'required',
            'lawyer_lastname' => 'required',
            'lawyer_phonenumber' => 'required',
            'lawyer_email' => 'required|email',
            'lawyer_address' => 'required',
            'lawyer_file' => 'required',
            'lawyer_information' => 'required',
        ]);

        // Create a new lawyer model instance and set its properties
        $lawyer = new Lawyer;
        // $lawyer->lawyer_name = $validatedData['lawyer_firstname'] . ' ' . $validatedData['lawyer_lastname'];
        $lawyer->lawyer_firstname = $validatedData['lawyer_firstname'];
        $lawyer->lawyer_lastname = $validatedData['lawyer_lastname'];
        $lawyer->lawyer_email = $validatedData['lawyer_email'];
        $lawyer->lawyer_phonenumber = $validatedData['lawyer_phonenumber'];
        $lawyer->lawyer_address = $validatedData['lawyer_address'];
        $lawyer->lawyer_file = $validatedData['lawyer_file'];
        $lawyer->lawyer_information = $validatedData['lawyer_information'];

        // Save the lawyer data to the database
        $lawyer->save();

        // Redirect to the lawyer_data route with the newly created lawyer's ID
        return Redirect::route('lawyer_data', ['id' => $lawyer->id])->with('success', 'Lawyer data has been successfully stored.');
        // return redirect()->route('lawyer_data', ['id' =>  $lawyer->id])->with('success', 'lawyer data has been successfully stored.');
    }
}

    // $table->id();
    // $table->timestamps();
    // $table->string('lawyer_firstname');
    // $table->string('lawyer_lastname');
    // $table->string('lawyer_phonenumber');
    // $table->string('lawyer_email');
    // $table->string('lawyer_address');
    // $table->string('lawyer_file');
    // $table->string('lawyer_information');