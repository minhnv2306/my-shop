<?php

namespace App\Http\Controllers\Sites;

use App\Models\Cart;
use App\Models\Product_cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $cart = Cart::where('hash_cart', $request->hash_cart)->first();
            if (empty($cart)) {
                $cart = Cart::create([
                    'hash_cart' => $request->hash_cart,
                    'price' => $request->price_cart,
                ]);
            }
            $product_cart = Product_cart::where([
                'product_id' => $request->product_id,
                'color' => $request->attribute_color,
                'size' => $request->attribute_size,
                'fit_type' => $request->fit_type,
            ])->first();
            if (empty($product_cart)) {
                Product_cart::create([
                    'cart_id' => $cart->id,
                    'product_id' => $request->product_id,
                    'color' => $request->attribute_color,
                    'size' => $request->attribute_size,
                    'fit_type' => $request->fit_type,
                    'number' => $request->quantity,
                    'price' => $request->price_cart,
                ]);
            } else {
                $number = $product_cart->number + $request->quantity;
                $product_cart->update([
                    'number' => $number,
                ]);
            }
            DB::commit();
            return redirect()->route('home');
        } catch (Exception $ex) {
            DB::rollback();
            dd($ex->getMessage());
        }
    }
}
