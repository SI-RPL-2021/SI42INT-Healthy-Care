<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginPage() {
        if(Auth::check()) {
            return redirect()->route('');
        }
        return view('Auth.login');
    }

    public function login(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $message = [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid Email',
            'password.required' => 'Password is required',
            'password.min' => 'Minimum 8 characters'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        // Auth Admin
        $datachek = User::where('email', $request->email)->first();
        if($datachek) {
            if($datachek->role == "admin"){
                $data = User::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('login', TRUE);

                        return redirect()->route('admin.profile');
                    } else {
                        return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
            }
        }

        // Auth Doctor
        $datachek = User::where('email', $request->email)->first();
        if($datachek) {
            if($datachek->role == "doctor"){
                $data = User::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('login', TRUE);

                        return redirect()->route('doctor.profile');
                    } else {
                        return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
            }
        }

        // Auth Nurse
        $datachek = User::where('email', $request->email)->first();
        if($datachek) {
            if($datachek->role == "nurse"){
                $data = User::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('login', TRUE);

                        return redirect()->route('nurse.dashboard');
                    } else {
                        return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
            }
        }

        // Auth Patient
        $datachek = User::where('email', $request->email)->first();
        if($datachek) {
            if($datachek->role == "patient"){
                $data = User::where('email', $request->email)->first();
                if($data){
                    if($request->password == $data->password){
                        Session::put('role', $data->role);
                        Session::put('username', $data->username);
                        Session::put('email', $data->email);
                        Session::put('password', $data->password);
                        Session::put('id', $data->id);
                        Session::put('login', TRUE);

                        if($data->username == ''){
                            return redirect()->route('');
                        }
                        return redirect()->route('');
                    } else {
                        return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
                    }
                }
                return redirect()->route('loginpage')->with('error', 'Invalid Email or Password');
            }
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('loginpage');
    }
}
