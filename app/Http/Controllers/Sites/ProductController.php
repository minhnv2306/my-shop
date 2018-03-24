<?php

namespace App\Http\Controllers\Sites;

use App\Models\Product;
use App\Models\Product_color;
use App\Models\Product_size;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $colors = Product_color::where('product_id', $product->id)->get(['color_name']);
        $sizes = Product_size::where('product_id', $product->id)->get(['size']);
        $reviews = Review::where('product_id', $product->id)->get();

        return view('sites.product.show', [
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'reviews' => $reviews,
        ]);
    }
}
