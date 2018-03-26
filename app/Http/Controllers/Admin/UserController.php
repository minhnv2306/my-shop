<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginAdminRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function login(LoginAdminRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1])) {
            return redirect('/home');
        } else {
            return redirect()->back()->withErrors('Username or password is not correct!');
        }
    }
}
