<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function homepage() {
        $data = Doctor::all();
        return view('Patient.homepage', ['data' => $data]);
    }

    // function fetch(Request $request) {
    //     $select = $request->get('select');
    //     $value = $request->get('value');
    //     $dependent = $request->get('dependent');
    //     $data = DB::table('doctor')
    //         ->where($select, $value)
    //         ->groupBy($dependent)
    //         ->get();
    //     error_log($data);
    //     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
    //     foreach($data as $row) {
    //         $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
    //     }
    //     echo $output;
    // }

    public function profile() 
    {
        $id = Session::get('id');
        $data = Patient::where('user_id', $id)->first();
        $data2 = User::find($id);
        return view('Patient.profile', ['patient' => $data, 'patient2' => $data2]);
    }

    public function updateProfilePage() {
        $id = Session::get('id');
        $data = Patient::where('user_id', $id)->first();
        $data2 = User::find($id);
        return view('Patient.editProfile', ['patient' => $data, 'patient2' => $data2]);
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'Fullname' => 'required',
            'Username' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
            'Address' => 'required'
        ]);

        $user = User::where('id', $id)->first();
        $patient = Patient::where('user_id', $id)->first();

        $user->username  = $request->Username;
        $user->email     = $request->Email;
        $save = $user->save();

        $patient->full_name     = $request->Fullname;
        $patient->phone_number = $request->Phone;
        $patient->gender       = $request->Gender;
        $patient->address      = $request->Address;
        $save = $patient->save();

        if($save) {
            return redirect()->route('patient.profile')->with(['success' => 'Account has been updated successfully']);;
        } else {
            return redirect()->route('patient.profile')->with(['failed' => 'account was not updated successfully']);
        }
    }

    public function appointment(Request $request) {
        // $request->validate([
        //     'Doctor' => 'required',
        //     'Date' => 'required',
        //     'Time' => 'required',
        //     'Phone' => 'required',
        //     'Message' => 'required'
        // ]);
        // error_log('test');
     
        error_log('test');
        

        $id = Session::get('id');
        $user = User::where('id', $id)->first();
        error_log('test1');
        error_log($user->id);
        error_log($request->Date);
        $appointment = Appointment::create([
            'doctor_id' => $request->Doctor,
            'patient_id' => $user->id,
            'date' => $request->Date,
            'time' => $request->Time,
            'phone_number' => $request->Phone,
            'message' => $request->Message
        ]);
        error_log('test2');
        $save = $appointment->save();
        error_log('test3');
        if($save) {
            return redirect()->route('patient.profile')->with(['success1' => 'Account has been created successfully']);;
        } else {
            return redirect()->back()->with(['failed' => 'account was not created successfully']);
        }
    }

    public function schedule() {
        $schedule = Appointment::all();
        return view('Patient.schedule', ['schedule' => $schedule]);
    }
}
