<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Nurse;
use App\Models\Patient;
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

    public function updateSchedule(Request $request) {
        $id = $request->input('id');
        $action = $request->input('action');
        $appointment = Appointment::where('id', $id)->first();

        if($action == 'accept') {
            $appointment->status = 'accepted';
        } else {
            $appointment->status = 'denied';
        }
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
        return view('Nurse.records', ['data' => $data]);
    }
}