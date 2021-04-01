<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Nurse;
use App\Models\User;


class NurseController extends Controller
{
    public function dashboard()
    {
        return view('Nurse.dashboard');
    } 

    public function profile()
    {
        
         $id = Session::get('id');
         $data = Nurse::find($id);
         $data2 = User::find($id);
         return view('Nurse.profile', ['Nurse' => $data, 'Nurse2' => $data2]);
        
    }

    public function notif()
    {
        return view('Nurse.notifications');
    }
}
