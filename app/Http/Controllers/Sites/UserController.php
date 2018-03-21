<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('sites.my-account');
    }
    public function login(Request $request)
    {
        dd(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]));
    }
}
