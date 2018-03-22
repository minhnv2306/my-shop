<?php

namespace App\Http\Controllers\Sites;

use App\Http\Requests\BillingAddressRequest;
use App\Http\Requests\ShippingAddressRequest;
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
        return view('sites.user.create-billing-address');
    }
    public function editBillingAddress()
    {
        return view('sites.user.edit-billing-address');
    }
    public function saveBillingAddress(BillingAddressRequest $request)
    {
        $request->billing_address_2 = empty($request->billing_address_2) ? '  ' : $request->billing_address_2;
        try {
            Auth::user()->update($request->all());
            return redirect()->route('user.address')->with('messages', 'Address changed successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('errors', $ex->getMessage());
        }
    }
    public function showShippingAddress()
    {
        return view('sites.user.create-shipping-address');
    }
    public function editShippingAddress()
    {
        return view('sites.user.edit-shipping-address');
    }
    public function saveShippingAddress(ShippingAddressRequest $request)
    {
        try {
            Auth::user()->update($request->all());
            return redirect()->route('user.address')->with('messages', 'Address changed successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('errors', $ex->getMessage());
        }
    }
}
