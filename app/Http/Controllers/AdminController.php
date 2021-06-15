<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Transaction;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard() {
        $count = User::all()->count();
        $count2 = Transaction::all()->count();
        return view('Admin.dashboard', compact('count', 'count2'));
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
        if($request->Admin == "admin") {
            $rules = [
                'Fullname' => 'required',
                'Username' => 'required|max:20',
                'Email' => 'required',
                'Phone' => 'required|numeric|min:11',
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
                'Password.required' => 'Password is required',
                'Password.min' => 'Password minimum 8 characters',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
    
            $user = User::create([
                'username' => $request->Username,
                'email' => $request->Email,
                'password' => $request->Password,
                'role' => "admin",
            ]);
            $user->save();

            $admin = Admin::create([
                'user_id' => $user->id,
                'full_name' => $request->Fullname,
                'phone_number' => $request->Phone,
            ]);
            $admin->save();
            return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);
        } 
        
        else if($request->Doctor == "doctor") {
            $rules = [
                'Fullname' => 'required',
                'Username' => 'required|max:20',
                'Specialist' => 'required',
                'Email' => 'required',
                'Address' => 'required',
                'Phone' => 'required|numeric|min:11',
                'Password' => 'required|min:8',
            ];
            $message = [
                'Fullname.required' => 'Fullname is required',
                'Username.required' => 'Username is required',
                'Username.max' => 'Username maximum 20 characters',
                'Specialist.required' => 'Specialist is required',
                'Email.required' => 'Email is required',
                'Address.required' => 'Address is required',
                'Phone.required' => 'Phone number is required',
                'Phone.numeric' => 'Phone number must be a number',
                'Phone.min' => 'Phone number minimum 11 numbers',
                'Password.required' => 'Password is required',
                'Password.min' => 'Password minimum 8 characters',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
    
            $user = User::create([
                'username' => $request->Username,
                'email' => $request->Email,
                'password' => $request->Password,
                'role' => "doctor",
            ]);
            $user->save();

            $doctor = Doctor::create([
                'user_id' => $user->id,
                'full_name' => $request->Fullname,
                'specialist' => $request->Specialist,
                'phone_number' => $request->Phone,
                'address' => $request->Address
            ]);
            $doctor->save();
            return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);
        }

        else if($request->Nurse == "nurse") {
            $rules = [
                'Fullname' => 'required',
                'Username' => 'required|max:20',
                'Email' => 'required',
                'Age' => 'required',
                'Gender' => 'required',
                'Address' => 'required',
                'Birth' => 'required',
                'Religion' => 'required',
                'Unit' => 'required',
                'Instance' => 'required',
                'Phone' => 'required|numeric|min:11',
                'Password' => 'required|min:8',
            ];
            $message = [
                'Fullname.required' => 'Fullname is required',
                'Username.required' => 'Username is required',
                'Username.max' => 'Username maximum 20 characters',
                'Email.required' => 'Email is required',
                'Age.required' => 'Age is required',
                'Gender.required' => 'Gender is required',
                'Address.required' => 'Address is required',
                'Birth.required' => 'Birth is required',
                'Religion.required' => 'Religion is required',
                'Unit.required' => 'Unit is required',
                'Instance.required' => 'Instance is required',
                'Phone.required' => 'Phone number is required',
                'Phone.numeric' => 'Phone number must be a number',
                'Phone.min' => 'Phone number minimum 11 numbers',
                'Password.required' => 'Password is required',
                'Password.min' => 'Password minimum 8 characters',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
    
            $user = User::create([
                'username' => $request->Username,
                'email' => $request->Email,
                'password' => $request->Password,
                'role' => "nurse",
            ]);
            $user->save();

            $nurse = Nurse::create([
                'user_id' => $user->id,
                'full_name' => $request->Fullname,
                'age' => $request->Age,
                'birth' => $request->Birth,
                'gender' => $request->Gender,
                'unit' => $request->Unit,
                'instance' => $request->Instance,
                'religion' => $request->Religion,
                'phone_number' => $request->Phone,
                'address' => $request->Address
            ]);
            $nurse->save();
            return redirect()->route('admin.userManagement')->with(['success' => 'Account has been created successfully']);
        }
    }

    public function history() {
        $count = Transaction::all()->count();
        $transaction = Transaction::all();
        return view('Admin\history', compact('count'), ['transaction' => $transaction]);
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

    public function deleteTransaction($id) {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('admin.history')->with(['success' => 'Data has been deleted']);    
    }
}