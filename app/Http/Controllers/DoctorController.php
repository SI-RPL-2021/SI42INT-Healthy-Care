<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
{
    public function dashboard() {
        return view('Doctor.dashboard');
    }
    public function Profile() {
        $id = Session::get('id');
        $data = Doctor::find($id);
        $data2 = User::find($id);
        return view('Doctor.profile', ['doctor' => $data, 'doctor2' => $data2]);
    }
}


