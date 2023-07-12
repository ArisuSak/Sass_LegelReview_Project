<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    if (Auth::user()->hasRole('user')) {
        return response()->json(['view' => 'index']);
    } elseif (Auth::user()->hasRole('firm_provider')) {
        return response()->json(['view' => 'firm_form']);
    } elseif (Auth::user()->hasRole('admin')) {
        return response()->json(['view' => 'firm_data']);
    }

    // If the user doesn't have any roles, return an appropriate response
    return response()->json(['message' => 'No role assigned'], 403);
}
    public function lawyerform(){
        return response()->json(['view' => 'index']);
    }
    public function firmform(){
        return response()->json(['view' =>'firm_form']);
    }
    public function lawyerdata(){
        return response()->json(['view' =>'lawyer_data']);
        
    }
    public function firmdata(){
        lawyer_data
    }
}
