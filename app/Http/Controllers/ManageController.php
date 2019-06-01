<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //
    function index(){
        return redirect()->route('manage.dashboard');
    }

    function dashboard()
    {
      return view('manage.dashboard');
    }
}
