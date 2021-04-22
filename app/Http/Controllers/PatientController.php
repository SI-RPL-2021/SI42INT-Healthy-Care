<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function profile() {
        $id = Session::get('id');
        $data = Patient::where('user_id', $id)->first();
        $data2 = User::find($id);
        return view('Patient.profile', ['patient' => $data, 'patient2' => $data2]);
    }
}
