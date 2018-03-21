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
        if (strpos($request->email, '@') === false) {
            $request->email = $request->email . '@gmail.com';
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('sites.my-account');
        } else {
            return redirect()->back()->withErrors('Username or password is not correct!');
        }
    }
    public function address()
    {
        return view('sites.user.address');
    }
    public function showBillingAddress()
    {
        return view('sites.user.edit-billing-address');
    }
}
