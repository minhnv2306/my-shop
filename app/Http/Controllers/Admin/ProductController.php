<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Product_size;
use App\Models\Product_color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', [
            'products' => $products,
        ]);
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Create product
            $data = $request->only([
                'name',
                'price',
                'number',
                'type',
                'type',
                'cotton',
                'made',
                'machine',
                'note_1',
                'note_2',
                'note_3',
            ]);

            $product = Product::create($data);
            // Store image file
            $director = 'p' . $product->id;
            $avatar = Storage::put($director, $request->avatar);
            if (!empty($request->image_1)) {
                $image1 = Storage::put($director, $request->image_1);
            }
            if (!empty($request->image_2)) {
                $image2 = Storage::put($director, $request->image_2);
            }
            if (!empty($request->image_3)) {
                $image3 = Storage::put($director, $request->image_3);
            }
            if (!empty($request->image_4)) {
                $image4 = Storage::put($director, $request->image_4);
            }
            $product->update([
                'avatar' => $avatar,
                'image_1' => empty($image1) ? '' : $image1,
                'image_2' => empty($image2) ? '' : $image2,
                'image_3' => empty($image3) ? '' : $image3,
                'image_4' => empty($image4) ? '' : $image4
            ]);
            // Cretae size
            for($i = 1; $i < 4; $i++) {
                $index = 'size' . $i;
                if (!empty($request[$index])) {
                    Product_size::create([
                        'product_id' => $product->id,
                        'size' => $request[$index]
                    ]);
                }
            }
            // Create color
            for($i = 1; $i < 4; $i++) {
                $index = 'color' . $i;
                if (!empty($request[$index])) {
                    Product_color::create([
                        'product_id' => $product->id,
                        'color_name' => $request[$index]
                    ]);
                }
            }
            DB::commit();

            return redirect()->route('products.index')->with('messages', 'Add product successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->route('products.index')->with('error', $ex->getMessage());
        }
    }
}
