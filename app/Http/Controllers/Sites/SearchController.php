<?php

namespace App\Http\Controllers\Sites;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::search($request->s);
        $links1 = $products->links();
        $links2 = str_replace("<ul", "<ul class='page-numbers'", $links1);
        $links3 = str_replace("<a", "<a class='page-numbers'", $links2);
        $links4 = str_replace('<li class="active"><span>', "<li><span class='page-numbers current'>", $links3);
        return view('sites.search', [
            'products' => $products,
            'links' => $links4,
            'key' => $request->s,
        ]);
    }
}
