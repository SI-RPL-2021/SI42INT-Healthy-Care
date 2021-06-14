<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Doctor;
use App\Models\Medical_record;
use App\Models\User;
use App\Models\Patient;

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

    public function checkUp(Request $request) {
        $id = $request->input('id');
        $data = Appointment::where('id', $id)->first();
        $data2 = Patient::where('user_id' ,$data['patient_id'])->first();
        $data3 = Medical_record::where('patient_id', $data['patient_id'])->first();
        error_log($data3);
        return view('Doctor\createRecords', ['data' => $data, 'data2' => $data2, 'data3' => $data3]);
    }

    public function medicalRecord(Request $request) {
        $rules = [
            'Age' => 'required',
            'Tinggi_badan' => 'required',
            'Berat_badan' => 'required',
            'Alergi' => 'required',
            'Riwayat_pengobatan' => 'required',
            'Riwayat_penyakit' => 'required',
            'Condition' => 'required',
        ];
        $message = [
            'Age.required' => 'Age is required',
            'Tinggi_badan.required' => 'Tinggi_badan is required',
            'Berat_badan.required' => 'Berat_badan is required',
            'Alergi.required' => 'Alergi number is required',
            'Riwayat_pengobatan.required' => 'Riwayat_pengobatan is required',
            'Riwayat_penyakit.required' => 'Riwayat_penyakit is required',
            'Condition.required' => 'Condition is required',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $record = Medical_record::create([
            'patient_id' => $request->Id,
            'date' => $request->Tgl_review,
            'usia' => $request->Age,
            'tinggi_badan' => $request->Tinggi_badan,
            'berat_badan' => $request->Berat_badan,
            'riwayat_alergi' => $request->Alergi,
            'riwayat_pengobatan' => $request->Riwayat_pengobatan,
            'penyakit' => $request->Riwayat_penyakit,
            'kondisi_umum' => $request->Condition,
        ]);
        $record->save();

        $appointment = Appointment::where('patient_id', $request->Id)->first();

        error_log($appointment->status);
        $appointment->status = 'done';
        $save = $appointment->save();

        if($save) {
            return redirect()->route('doctor.dashboard')->with(['success' => 'Data has been updated successfully']);;
        } else {
            return redirect()->route('doctor.dashboard')->with(['failed' => 'Schedule was not updated successfully']);
        }
    }

    public function record() {
        $data = Patient::all();
        error_log($data);
        return view('Doctor.records', ['data' => $data]);
    }
}
