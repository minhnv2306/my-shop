<?php

namespace App\Http\Controllers\Sites;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            if (empty($request->name) && empty($request->email)) {
                $data['email'] = Auth::user()->email;
                $data['author'] = convertEmailToUsername(Auth::user()->email);
            }
            Review::create($data);
            return redirect()->back();
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }
}
