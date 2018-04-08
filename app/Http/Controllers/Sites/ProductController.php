<?php

namespace App\Http\Controllers\Sites;

use App\Models\Product;
use App\Models\Product_color;
use App\Models\Product_size;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $colors = Product_color::where([
                ['product_id', $product->id],
                ['sex', 'Men']
            ])
            ->get(['color_name']);
//        $sizes = Product_size::where('product_id', $product->id)->get(['size']);
        $sizes = Product::getSize();
        $reviews = Review::getReviews($product->id, null, 1);

        if (Auth::check()) {
            $reviews_waiting = Review::getReviews($product->id, Auth::user()->email, 0);
        } else {
            $reviews_waiting = array();
        }
        return view('sites.product.show', [
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'reviews' => $reviews,
            'reviews_waiting' => $reviews_waiting,
        ]);
    }
    public function getColor(Request $request)
    {
        $product_id = $request->product_id;
        $sex = $request->sex == 1 ? 'Men' : 'Women';
        $colors = Product_color::where([
            ['product_id', $product_id],
            ['sex', $sex]
        ])->get();

        return view('sites.product.color', [
            'colors' => $colors
        ]);
    }
}
