<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\User;

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

    public function editDoctor() {
        return view('Admin.editDoctor');
    }

    public function editNurse() {
        return view('Admin.editNurse');
    }
}
