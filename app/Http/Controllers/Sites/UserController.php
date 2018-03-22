<?php

namespace App\Http\Controllers\Sites;

use App\Http\Requests\BillingAddressRequest;
use App\Http\Requests\ShippingAddressRequest;
use App\Http\Requests\UserAccountRequest;
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
    public function showAccount()
    {
        return view('sites.user.account-detail');
    }
    public function saveAccount(UserAccountRequest $request)
    {
        try {
            if (empty($request->password_current) && empty($request->new_password) && empty($request->new_password_confirmation)) {
                Auth::user()->update([
                    'first_name' => $request->first_name,
                    'email' => $request->email,
                    'last_name' => $request->last_name,

                ]);
                return redirect()->route('user.address')->with('messages', 'Address changed successfully.');
            } else {
                $this->validate($request, [
                    'password_current' => 'required',
                    'new_password' => 'required|min:8|confirmed',
                ]);

                if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password_current])) {
                    Auth::user()->update([
                        'email' => $request->email,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'password' => bcrypt($request->new_password)
                    ]);
                    return redirect()->route('user.address')->with('messages', 'Address changed successfully.');
                } else {
                    return redirect()->back()->withErrors('Username or password is not correct!');
                }
            }

        } catch (Exception $ex) {
            return redirect()->back()->with('errors', $ex->getMessage());
        }
    }
}
