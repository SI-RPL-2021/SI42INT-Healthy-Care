<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function dashboard()
    {
        return view('Nurse.dashboard');
    }
    public function profile()
    {
        return view('Patient.user_profile');
    }
}
