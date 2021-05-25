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
        $edit = Patient::where('user_id', $id)->first();
        $edit2 = User::find($id);
        // error_log($edit2->id);
        return view('Patient.editProfile', compact('edit', 'edit2'));
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'fullname' => 'required',
            'username'  => 'required',
            'email'     => 'required'
        ]);

        $user = User::where('id', $id)->first();
        $patient = Patient::where('user_id', $id)->first();

        $user->username  = $request->username;
        $user->email     = $request->email;
        $save = $user->save();

        $patient->fullname     = $request->fullname;
        $patient->phone_number = $request->phone;
        $patient->gender       = $request->gender;
        $patient->address      = $request->address;
        $save = $patient->save();

        if($save) {
            return redirect()->route('patient.profile')->with(['success' => 'Account has been updated successfully']);;
        } else {
            return redirect()->route('patient.profile')->with(['failed' => 'account was not updated successfully']);
        }
    }

    // public function exampleMethod($data1, $data2)
    // {
    //     $hasil = $data1 + $data2;
    //     return $hasil;
    // }
}
