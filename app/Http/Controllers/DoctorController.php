<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function dashboard()
    {
        return view('Doctor.dashboard');
    }
    public function Profile()
    {
        return view('Doctor.profile');
    }
}


