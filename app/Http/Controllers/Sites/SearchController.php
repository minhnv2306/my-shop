<?php

namespace App\Http\Controllers\Sites;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $param['key'] = $request->s;
        if (!empty($request->orderby)) {
            switch ($request->orderby) {
                case 1:
                    $param['orderby'] = 'price';
                    $param['option'] = 'asc';
                    break;
                case 2:
                    $param['orderby'] = 'price';
                    $param['option'] = 'desc';
                    break;
                default:
                    $param['orderby'] = 'created_at';
                    $param['option'] = 'asc';
            }
        }
        $products = Product::search($param);
        $links1 = $products->links();
        $links2 = str_replace("<ul", "<ul class='page-numbers'", $links1);
        $links3 = str_replace("<a", "<a class='page-numbers'", $links2);
        $links4 = str_replace('<li class="active"><span>', "<li><span class='page-numbers current'>", $links3);

        if (empty($request->orderby)) {
            $links5 = str_replace('search?', "search?s=" . $param['key'] . '&', $links4);
        } else {
            $links5 = str_replace('search?', "search?s=" . $param['key'] . '&orderby=' . $request->orderby . '&', $links4);
        }
        return view('sites.search', [
            'products' => $products,
            'links' => $links5,
            'key' => $request->s,
        ]);
    }
}
