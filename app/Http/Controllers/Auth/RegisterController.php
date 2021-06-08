<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function registerpage(){
        return view('Auth.register');
    }

    protected function register(Request $request){
        $rules = [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm' => 'required'
        ];
        $message = [
            'username.required' => 'Username is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum 8 characters',
            'confirm.required' => 'Password confirmation is required'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if($request->password == $request->confirm){
            $patient = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' =>$request->password
            ]);
            $save = $patient->save();

            if($save) {
                Session::flash('success', 'Register successfully! Please login to access data');
                return redirect()->route('loginpage');
            } else {
                Session::flash('failed', 'Register failed! Please try again later');
                return redirect()->route('registerpage');
            }
        } else {
            Session::flash('failed', 'Register failed! Please try again later');
            return redirect()->route('registerpage');
        }
    }

    public function example($data1, $data2) {
        $hasil = $data1 + $data2;
        return $hasil;
    }
}
