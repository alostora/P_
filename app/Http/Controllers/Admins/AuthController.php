<?php

namespace App\Http\Controllers\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginView()
    {
        return view('Admin.loginView');
    }

    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'type' => UserTyps::ADMIN['code']]) == true) {
            return redirect(url('admin'));
        } else {
            return redirect(url('admin/login'));
        }
    }

    public function logOut()
    {
        auth()->logout();
        return redirect(url('admin/login'));
    }
}
