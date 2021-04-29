<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function profile() 
    {
        $id = Session::get('id');
        $data = Patient::where('user_id', $id)->first();
        $data2 = User::find($id);
        return view('Patient.profile', ['patient' => $data, 'patient2' => $data2]);
    }

    public function edit($id)
    {
        $edit2 = User::find($id);
        error_log($edit2->id);
        $edit = Patient::where('user_id', $id)->first();
        return view('Patient.editProfile', compact('edit2', 'edit'));
    }

    public function update(Request $request, $id) 
    {
        $user = User::find($id);

        $user->patient()->full_name    = $request->fullname;
        $user->username                = $request->username;
        $user->email                   = $request->email;
        $user->patient()->phone_number = $request->phone;
        $user->patient()->gender       = $request->gender;
        $user->patient()->address      = $request->address;

        $user->save();

        if($save) {
            return redirect()->route('patient.profile')->with(['success' => 'Account has been updated successfully']);;
        } else {
            return redirect()->route('patient.profile')->with(['failed' => 'account was not updated successfully']);
        }
    }

    public function exampleMethod($data1, $data2)
    {
        $hasil = $data1 + $data2;
        return $hasil;
    }
}
