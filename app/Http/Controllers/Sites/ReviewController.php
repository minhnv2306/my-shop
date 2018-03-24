<?php

namespace App\Http\Controllers\Sites;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            Review::create($request->all());
            return redirect()->back();
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }
}
