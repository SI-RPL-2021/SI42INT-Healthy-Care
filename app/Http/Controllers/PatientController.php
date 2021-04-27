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
        $edit = Patient::where('user_id', $id)->first();
        return view('Patient.editProfile', ['patient' => $edit, 'patient2' => $edit2]);
    }

    public function update(Request $request, $id) 
    {
        $this->validate($request, [
            'full_name'    => $request->full_name,
            'username'     => $request->username,
            'email'        => $request->email
        ]);

        User::where('id', $user_id)
            ->update([
                'full_name'    => $request->full_name,
                'username'     => $request->username,
                'email'        => $request->email,
                'phone_number' => $request->phone_number,
                'gender'       => $request->gender,
                'address'      => $request->address
            ]);

        return redirect()->route('patient.profile')->with(['success' => 'Account has been updated successfully']);
    }
}
