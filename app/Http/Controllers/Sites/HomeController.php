<?php

namespace App\Http\Controllers\Sites;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        $sale_products = Product::orderBy('sale_number', 'desc')
            ->limit(4)
            ->get();
        return view('sites.home', [
            'products' => $products,
            'sale_products' => $sale_products,
        ]);
    }
    public function aboutUs()
    {
        return view('sites.about-us');
    }
    public function contactUs()
    {
        return view('sites.contact-us');
    }
    public function faqs()
    {
        return view('sites.faqs');
    }
    public function sizeChar()
    {
        return view('sites.size-char');
    }
    public function myAccount()
    {
        return view('sites.my-account');
    }
    public function cart()
    {
        return view('sites.cart');
    }
}
