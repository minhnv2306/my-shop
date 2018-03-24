<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index', [
            'reviews' => $reviews
        ]);
    }
    public function approved($review_id)
    {
        try {
            Review::find($review_id)
                ->update([
                    'approved' => 1
                ]);
            return redirect()->route('reviews.index');
        } catch (Exception $ex) {
            dd('Somethins went wrong');
        }
    }
    public function hide($review_id)
    {
        try {
            Review::find($review_id)
                ->update([
                    'approved' => 0
                ]);
            return redirect()->route('reviews.index');
        } catch (Exception $ex) {
            dd('Somethins went wrong');
        }
    }
}
