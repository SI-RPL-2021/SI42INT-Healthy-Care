<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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

    public function deleteAccount($id) {
        $data = User::find($id);
        if(Session::get('id') != $id) {
            $data->delete();
            return redirect()->route('admin.userManagement')->with(['success' => 'Data has been deleted']);    
        }
        return redirect()->back()->with(['failed' => 'Data is not deleted']);    
    }

    public function editDoctor() {
        return view('Admin.editDoctor');
    }

    public function editNurse() {
        return view('Admin.editNurse');
    }

    public function updateProfilePage(){
        $id = Session::get('id');
        $data = Admin::find($id);
        $data2 = User::find($id);
        return view('admin.UpdateProfile', ['admin' => $data, 'admin2' => $data2]);
    }

    public function updateProfile(Request $request){
        $rules = [
            'image' => 'required',
            'fullname' => 'required|max:150',
            'Username' => 'required|max:20',
            'email' => 'required|max:50',
            'Phone' => 'required|numeric|min:11',

        ];
        $message = [
            'image.required' => 'Image is required',
            'image.max' => 'Image maximum 15 characters',
            'fullname.required' => 'Fullname is required',
            'fullname.max' => 'fullname maximum 150 characters',
            'Username.required' => 'Username is required',
            'Username.max' => 'Username maximum 20 characters',
            'email.required' => 'Email is required',
            'email.max' => 'Email maximum 20 characters',
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
        $data->image = $request->image;
        $data->full_name = $request->fullname;
        $data2->username = $request->Username;
        $data2->email = $request->email;
        $data->phone_number = $request->Phone;
        $data->save();
        Session::put('name', $request->username);
        error_log($request->fullname);
        return redirect()->route('admin.profile')->with('success', 'Data updated successfully');
    }
}
