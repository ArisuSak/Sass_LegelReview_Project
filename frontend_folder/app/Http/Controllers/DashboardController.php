<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
