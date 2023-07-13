<?php

namespace App\Http\Controllers;
use App\Models\Firm;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Rating;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('user')) {
            return view('index');
        }
        elseif(Auth::user()->hasRole('firm_provider')){
            return view('firm_form');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('firm_data');
        }

    }
    public function lawyerform(){
        return view('lawyer_form');
    }
    public function firmform(){
        return view('firm_form');
    }
    public function lawyerdata(){
        return view('lawyer_data');
    }
    public function firmdata(){
        return view('lawyer_data');
    }


    // //count user
    // public function showUserCount()
    // {
    //     // Retrieve the user count from your data source
    //     $userCounts = User::count();
    
    //     // Retrieve all users with their roles
    //     $users = User::with('roles')->get();
    
    //     // Count the number of users for each role
    //     $roleCounts = $users->pluck('roles.*.name')->flatten()->countBy();
    
    //     return view('dashboard', compact('userCounts', 'roleCounts'));
    // }

    // public function countFirm()
    // {
    //     $firmCounts = Firm::count(); // Count the number of firms

    //     return view('dashboard', compact('firmCounts'));
    // }


    public function showDashboard()
    {
        // Retrieve the user count from your data source
        $userCounts = User::count();
        
        // Retrieve all users with their roles
        $users = User::with('roles')->get();
        
        // Count the number of users for each role
        $roleCounts = $users->pluck('roles.*.name')->flatten()->countBy();
        
        // Count the number of firms
        $firmCounts = Firm::count();
        
        // Count the number of contacts
        $contactCounts = Contact::count();
    
        return view('dashboard', compact('userCounts', 'roleCounts', 'firmCounts', 'contactCounts'));
    }
    

  
    
    
    

}
