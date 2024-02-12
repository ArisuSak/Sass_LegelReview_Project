<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Firm;

class ServiceController extends Controller
{
    public function create($firmId)
    {
        $firm = Firm::find($firmId);
        $services = Service::all();
    
        return view('service_form', compact('firm', 'services'));
    }
    
    
    
    public function show($id)
{
    $service = Service::findOrFail($id);

    return view('service_data', compact('service'));
}
// public function showAllService($id)
// {
//     $service = Service::findOrFail($id);

//     return view('service_data', compact('service'));
// }
public function showAllService()
{
    $services = Service::all();

    return view('service_data', compact('services'));
}



    
// public function storeData(Request $request, $firmId)
// {
//     // Validate the form data
//     $validatedData = $request->validate([
//         'service_name' => 'required',
//         'service_detail' => 'required',
//     ]);

//     // Create a new service model instance and set its properties
//     $service = new Service;
//     $service->service_name = $validatedData['service_name'];
//     $service->service_detail = $validatedData['service_detail'];
//     $service->firm_id = $firmId; // Set the firm ID for the service

//     // Save the service data to the database
//     $service->save();

//     // Redirect to the 'firm-profile' route with the firm ID
//     return redirect()->route('firm-profile', ['id' => $firmId])->with('success', 'Service data has been successfully stored.');
// }



public function storeData(Request $request, $firmId)
{
    // Validate the form data
    $validatedData = $request->validate([
        'service_name' => 'required',
        'service_detail' => 'required',
    ]);

    // Create a new service model instance and set its properties
    $service = new Service;
    $service->service_name = $validatedData['service_name'];
    $service->service_detail = $validatedData['service_detail'];
    $service->firm_id = $firmId; // Set the firm ID for the service

    // Save the service data to the database
    $service->save();

    // Get the ID of the logged-in user
    $userId = Auth::id();

    // Redirect to the 'firm-profile' route with the user ID
    return redirect()->route('firm-profile', ['id' => $userId])->with('success', 'Service data has been successfully stored.');
}



}
