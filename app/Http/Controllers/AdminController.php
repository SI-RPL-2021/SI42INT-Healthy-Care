<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard() {
        $count = User::all()->count();
        return view('Admin.dashboard', compact('count'));
    }

    public function profile() {
        $id = Session::get('id');
        $data = User::find($id);
        return view('Admin.profile', ['admin' => $data]);
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
        $rules = [
            'fullname' => 'required',
            'username' => 'required|max:20',
            'email' => 'required',
            'phone' => 'required|numeric|min:11',
            'role' => 'required',
            'password' => 'required|min:8',
        ];
        $message = [
            'fullname.required' => 'Username is required',
            'username.required' => 'Username is required',
            'username.max' => 'Username maximum 20 characters',
            'email.required' => 'Username is required',
            'phone.required' => 'Phone number is required',
            'phone.numeric' => 'Phone number must be a number',
            'phone.min' => 'Phone number minimum 11 numbers',
            'role.required' => 'Role is required',
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum 8 characters',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $user = User::create([
            // 'full_name' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            // 'phone_number' => $request->phone,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        $save = $user->save();

        error_log($request->fullname);

        if($save) {
            return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);;
        } else {
            return redirect()->route('admin.userManagement')->with(['failed' => 'account was not created successfully']);
        }
    }

    public function history() {
        return view('Admin\history');
    }

    public function editAccount($id) 
    {
        $data2 = User::find($id);
        
        if($data2->role == "doctor") {
            $data = Doctor::where('user_id', $id)->first();
            return view('Doctor.editProfile', compact('data2', 'data'));
        } else if($data2->role == "nurse") {
            $data = Nurse::where('user_id', $id)->first();
            return view('Nurse.editProfile', compact('data2', 'data'));
        }
    }

    public function updateAccount(Request $request, $id) 
    {
        // $rules = [
        //     'fullname' => 'required',
        //     'username' => 'required|max:20',
        //     'email'    => 'required'
        // ];

        // $message = [
        //     'fullname.required' => 'Username is required',
        //     'username.required' => 'Username is required',
        //     'username.max'      => 'Username maximum 20 characters'
        // ];

        // $validator = Validator::make($request->all(), $rules, $message);

        // if($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput($request->all());
        // }

        $user = User::find($id);

        if($user->role == "doctor") {
            
            $user->doctor()->full_name    = $request->fullname;
            $user->username               = $request->Username;
            $user->doctor()->specialist   = $request->specialist;
            $user->email                  = $request->email;
            $user->doctor()->address      = $request->address;
            $user->doctor()->phone_number = $request->Phone;

            $save = $user->save();

            if($save) {
                return redirect()->route('admin.userManagement')->with(['success' => 'Account has been updated successfully']);;
            } else {
                return redirect()->route('admin.userManagement')->with(['failed' => 'account was not updated successfully']);
            }

        } else if($user->role == "nurse") {

            $user->nurse()->full_name    = $request->full_name;
            $user->email                 = $request->email;
            $user->username              = $request->username;
            $user->nurse()->position     = $request->position;
            $user->nurse()->age          = $request->age;
            $user->nurse()->gender       = $request->gender;
            $user->nurse()->address      = $request->address;
            $user->nurse()->birth        = $request->birth;
            $user->nurse()->unit         = $request->unit;
            $user->nurse()->instance     = $request->instance;
            $user->nurse()->religion     = $request->religion;

            $save = $user->save();

            if($save) {
                return redirect()->route('admin.userManagement')->with(['success' => 'Account has been updated successfully']);;
            } else {
                return redirect()->route('admin.userManagement')->with(['failed' => 'account was not updated successfully']);
            }
        }
        
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
