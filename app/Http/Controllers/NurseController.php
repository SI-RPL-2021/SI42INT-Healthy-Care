<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Nurse;
use App\Models\User;

class NurseController extends Controller
{
    public function dashboard()
    {
        $data = Appointment::all();
        return view('Nurse.dashboard', ['data' => $data]);
    } 

    public function profile()
    {
        $id = Session::get('id');
        $data = Nurse::where('user_id', $id)->first();
        $data2 = User::find($id);
        error_log(Session::get('id'));
        return view('Nurse.profile', ['Nurse' => $data, 'Nurse2' => $data2]);
    }
}
