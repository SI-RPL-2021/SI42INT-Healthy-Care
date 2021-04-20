<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard() {
        $count = User::all()->count();
        return view('Admin.dashboard', compact('count'));
    }

    public function profile() {
        $id = Session::get('id');
        $data = Admin::find($id);
        $data2 = User::find($id);
        return view('Admin.profile', ['admin' => $data, 'admin2' => $data2]);
    }

    public function userManagement() {
        $count = User::all()->count();
        $data = User::all();
        return view('Admin.userManagement', ['account' => $data], compact('count'));
    }

    public function history() {
        return view('Admin\history');
    }
}
