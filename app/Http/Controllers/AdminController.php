<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard() {
        $count = User::all()->count();
        return view('Admin.dashboard', compact('count'));
    }

    public function userManagement() {
        $count = User::all()->count();
        $data = User::all();
        return view('Admin.userManagement', ['account' => $data], compact('count'));
    }

    public function addAccountPage() {
        return view('Admin.addAccount');
    }

    public function addAccount(Request $request) {
        error_log($request->Admin);
        $rules = [
            'Fullname' => 'required',
            'Username' => 'required|max:20',
            'Email' => 'required',
            'Phone' => 'required|numeric|min:11',
            'Role' => 'required',
            'Password' => 'required|min:8',
        ];
        $message = [
            'Fullname.required' => 'Fullname is required',
            'Username.required' => 'Username is required',
            'Username.max' => 'Username maximum 20 characters',
            'Email.required' => 'Email is required',
            'Phone.required' => 'Phone number is required',
            'Phone.numeric' => 'Phone number must be a number',
            'Phone.min' => 'Phone number minimum 11 numbers',
            'Role.required' => 'Role is required',
            'Password.required' => 'Password is required',
            'Password.min' => 'Password minimum 8 characters',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        // check role
        error_log("error");
        error_log($request->Role);
        if($request->Role == "admin") {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'role' => "admin",
            ]);
            $user->save();
            $admin = Admin::create([
                'user_id' => $user->id,
                'full_name' => $request->fullname,
                'phone_number' => $request->phone,
            ]);
            $admin->save();
            return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);;
            error_log("error2");
        // } else if($request->role == "doctor") {

        // } else if($request->role == "nurse") {

        // } else {

        // }

        // if($save) {
        //     return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);;
        // } else {
        //     return redirect()->route('admin.userManagement')->with(['failed' => 'account was not created successfully']);
        }
    }

    public function history() {
        return view('Admin\history');
    }

    public function editAccountPage($id) 
    {
        $data = User::find($id);

        if($data->role == "admin") {
            $data2 = Admin::where('user_id', $id)->first();
            return view('Admin.UpdateProfile', compact('data', 'data2'));
        } else if($data->role == "doctor") {
            $data2 = Doctor::where('user_id', $id)->first();
            return view('Doctor.editProfile', compact('data', 'data2'));
        } else if($data->role == "nurse") {
            $data2 = Nurse::where('user_id', $id)->first();
            return view('Nurse.editProfile', compact('data', 'data2'));
        } else if($data->role == "patient") {
            $data2 = Patient::where('user_id', $id)->first();
            return view('Admin.editPatient', compact('data', 'data2'));
        }
    }

    public function updateAccount(Request $request, $id) 
    {
        $user = User::where('id', $id)->first();
        $nurse = Nurse::where('user_id', $id)->first();
        $doctor = Doctor::where('user_id', $id)->first();

        if($user->role == "doctor") {
            $request->validate([
                'Fullname' => 'required',
                'Username' => 'required',
                'Email' => 'required',
                'Address' => 'required',
                'Phone' => 'required',
            ]);

            $user->username       = $request->Username;
            $user->email          = $request->Email;
            $save = $user->save();
            
            $doctor->full_name    = $request->Fullname;
            // $doctor->specialist   = $request->Specialist;
            $doctor->address      = $request->Address;
            $doctor->phone_number = $request->Phone;
            $save = $doctor->save();

            if($save) {
                return redirect()->route('admin.userManagement')->with(['success' => 'Account has been updated successfully']);;
            } else {
                return redirect()->route('admin.userManagement')->with(['failed' => 'account was not updated successfully']);
            }

        } else if($user->role == "nurse") {
            $request->validate([
                'Fullname' => 'required',
                'Username' => 'required',
                'Email' => 'required',
                'Address' => 'required',
                'Phone' => 'required',
                'Age' => 'required',
                'Gender' => 'required',
                'Birth' => 'required',
                'Unit' => 'required',
                'Instance' => 'required',
                'Religion' => 'required'
            ]);

            $user->email         = $request->Email;
            $user->username      = $request->Username;
            $save = $user->save();

            $nurse->full_name    = $request->Fullname;
            $nurse->age          = $request->Age;
            $nurse->gender       = $request->Gender;
            $nurse->address      = $request->Address;
            $nurse->birth        = $request->Birth;
            $nurse->unit         = $request->Unit;
            $nurse->instance     = $request->Instance;
            $nurse->religion     = $request->Religion;
            $save = $nurse->save();

            if($save) {
                return redirect()->route('admin.userManagement')->with(['success' => 'Account has been updated successfully']);;
            } else {
                return redirect()->route('admin.userManagement')->with(['failed' => 'account was not updated successfully']);
            }
        }
    }

    public function profile() {
        $id = Session::get('id');
        $data = User::find($id);
        return view('Admin.profile', ['admin' => $data]);
    }

    public function updateProfilePage() {
        $id = Session::get('id');
        $data = Admin::find($id);
        $data2 = User::find($id);
        return view('admin.UpdateProfile', ['admin' => $data, 'admin2' => $data2]);
    }

    public function updateProfile(Request $request){
        $rules = [
            // 'Image' => 'required',
            'Fullname' => 'required|max:150',
            'Username' => 'required|max:20',
            'Email' => 'required|max:50',
            'Phone' => 'required|numeric|min:11',

        ];
        $message = [
            // 'Image.required' => 'Image is required',
            'Fullname.required' => 'Fullname is required',
            'Fullname.max' => 'fullname maximum 150 characters',
            'Username.required' => 'Username is required',
            'Username.max' => 'Username maximum 20 characters',
            'Email.required' => 'Email is required',
            'Email.max' => 'Email maximum 20 characters',
            'Phone.required' => 'Phone is required',
            'Phone.numeric' => 'Phone must be a number',
            'Phone.min' => 'Phone minimum 11 numbers',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = Admin::find($request->id);
        $data2 = User::find($request->id);
        // $data->image = $request->Image;
        $data->full_name = $request->Fullname;
        $data2->username = $request->Username;
        $data2->email = $request->Email;
        $data->phone_number = $request->Phone;
        $data->save();
        Session::put('name', $request->Username);
        return redirect()->route('admin.profile')->with('success', 'Data updated successfully');
    }

    public function deleteAccount($id) {
        $data = User::find($id);
        if(Session::get('id') != $id) {
            $data->delete();
            return redirect()->route('admin.userManagement')->with(['success' => 'Data has been deleted']);    
        }
        return redirect()->back()->with(['failed' => 'Data is not deleted']);    
    }
}
