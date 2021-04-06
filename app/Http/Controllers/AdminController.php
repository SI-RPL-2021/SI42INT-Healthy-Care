<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard() {
        return view('Admin.dashboard');
    }

    public function profile() {
        $id = Session::get('id');
        $data = Admin::find($id);
        $data2 = User::find($id);
        return view('Admin.profile', ['admin' => $data, 'admin2' => $data2]);
    }

    public function userManagement() {
        return view('Admin.userManagement');
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
