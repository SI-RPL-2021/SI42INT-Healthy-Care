<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
{
    public function dashboard() {
        $id = Session::get('id');
        $data = Doctor::whereUserId($id)->first();
        $data2 = Appointment::whereDoctorIdAndStatus($data["user_id"], "accepted")->get();
        return view('Doctor.dashboard', ['data' => $data2]);
    }
    
    public function profile() {
        $id = Session::get('id');
        $data = Doctor::where('user_id', $id)->first();
        $data2 = User::find($id);
        return view('Doctor.profile', ['doctor' => $data, 'doctor2' => $data2]);
    }

    public function updateSchedule(Request $request) {
        $id = $request->input('id');
        $appointment = Appointment::where('id', $id)->first();
        $done = 'done';

        $appointment->status = $done;
        $save = $appointment->save();

        if($save) {
            return redirect()->back()->with(['success' => 'Schedule has been updated successfully']);;
        } else {
            return redirect()->back()->with(['failed' => 'Schedule was not updated successfully']);
        }
    }

    public function record() {
        $data = Patient::all();
        error_log($data);
        return view('Doctor.records', ['data' => $data]);
    }
}


