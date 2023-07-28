<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('backend.admin.login');
    }
    public function loginAuth(Request $request)
    {
        $data = $request->all();
        $validator = array();
        $validator['email'] = 'required|email';
        $validator['password'] = 'required';
        $request->validate($validator);

        if (Auth::guard('web')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'Active'])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('msg', 'Please Check Your Credentials');
        }
    }

    public function profile()
    {
        return view('backend.admin.profile');
    }
}
