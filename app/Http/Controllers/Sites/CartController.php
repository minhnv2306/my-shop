<?php

namespace App\Http\Controllers\Sites;

use App\Models\Cart;
use App\Models\Product;
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
            } else {
                $new_price = $cart->price + $request->price_cart;
                $cart->update([
                    'price' => $new_price
                ]);
            }
            $product_cart = Product_cart::where([
                'product_id' => $request->product_id,
                'color' => $request->attribute_color,
                'size' => $request->attribute_size,
                'fit_type' => $request->fit_type,
                'cart_id' => $cart->id,
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
                $total_price = $product_cart->price + $request->price_cart;
                $product_cart->update([
                    'number' => $number,
                    'price' => $total_price,
                ]);
            }
            DB::commit();
            $messages = (empty(Product::find($request->product_id)) ? '' : Product::find($request->product_id)->name) . ' has been added to your cart.';
            return redirect()->route('carts.showMyCart')->with('messages', $messages);
        } catch (Exception $ex) {
            DB::rollback();
            dd($ex->getMessage());
        }
    }
    public function getNumberProduct(Request $request)
    {
        $cart = Cart::where('hash_cart', $request->hash)->first();
        if (!empty($cart)) {
            session(['hash_cart' => $cart->hash_cart]);
            $count = count(Product_cart::where('cart_id', $cart->id)->get());
            $total_price = $cart->price;
        } else {
            $count = 0;
            $total_price = 0;
        }
        return view('sites.cart.header', [
            'count' => $count,
            'total_price' => $total_price
        ]);
    }
    public function showMyCart(Request $request)
    {
        $cart = Cart::where('hash_cart', $request->hash)->first();
        if (!empty($cart)) {
            $product_cart = Product_cart::where('cart_id', $cart->id)->get();
        } else {
            $product_cart = array();
        }
        return view('sites.cart.my-cart', [
            'product_carts' => $product_cart,
            'total_price' => empty($cart) ? 0 : $cart->price,
        ]);
    }
    public function getMyCart()
    {
        return view('sites.cart.show');
    }
    public function deleteProductOfCart($product_cart_id, $cart_id)
    {
        DB::beginTransaction();
        try {
            $product_cart = Product_cart::where([
                'id' => $product_cart_id,
                'cart_id' => $cart_id,
            ])->first();
            $cart = Cart::find($cart_id);
            if (! empty($product_cart) && ! empty($cart)) {
                $product_cart->delete();
                $new_price = $cart->price - $product_cart->price;
                $cart->update([
                    'price' => $new_price
                ]);
                $messages = (empty(Product::find($product_cart->product_id)) ? '' : Product::find($product_cart->product_id)->name) . ' removed.';
                DB::commit();
                return redirect()->route('carts.showMyCart')->with('messages', $messages);
            } else {
                DB::rollback();
                return view('errors.404');
            }

        } catch (Exception $ex) {
            DB::rollback();
            return view('errors.404');
        }
    }
}
