<?php

namespace App\Http\Controllers\Admin;

use App\Helper\DataHelper;
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
                'cotton',
                'made',
                'machine',
                'note_1',
                'note_2',
                'note_3',
            ]);

            $product = Product::create($data);
            // Store image file
            $director = 'public/' . $product->id;
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
                'avatar' => saveLinkImage($avatar),
                'image_1' => empty($image1) ? '' : saveLinkImage($image1),
                'image_2' => empty($image2) ? '' : saveLinkImage($image2),
                'image_3' => empty($image3) ? '' : saveLinkImage($image3),
                'image_4' => empty($image4) ? '' : saveLinkImage($image4)
            ]);
            // Cretae size
            for($i = 1; $i < 14; $i++) {
                $index = 'size' . $i;
                if (!empty($request[$index])) {
                    Product_size::create([
                        'product_id' => $product->id,
                        'size' => $request[$index]
                    ]);
                }
            }
            // Create color
            for($i = 1; $i < 20; $i++) {
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

    public function show(Product $product)
    {
        return view('admin.product.show', [
            'product' => $product,
            'colors' => Product_color::where('product_id', $product->id)->pluck('color_name')->toArray(),
            'sizes' => Product_size::where('product_id', $product->id)->pluck('size')->toArray()
        ]);
    }
    public function update(Request $request, Product $product)
    {
        DB::beginTransaction();
        try {
            // Create product
            $data = $request->only([
                'name',
                'price',
                'cotton',
                'made',
                'machine',
                'note_1',
                'note_2',
                'note_3',
            ]);

            $product->update($data);
            // Store image file
            $director = 'public/' . $product->id;
            if (!empty($request->avatar)) {
                $avatar = Storage::put($director, $request->avatar);
                $product->update([
                    'avatar' => saveLinkImage($avatar)
                ]);
            }
            if (!empty($request->image_1)) {
                $image1 = Storage::put($director, $request->image_1);
                $product->update([
                    'image_1' => saveLinkImage($image1)
                ]);
            }
            if (!empty($request->image_2)) {
                $image2 = Storage::put($director, $request->image_2);
                $product->update([
                    'image_2' => saveLinkImage($image2)
                ]);
            }
            if (!empty($request->image_3)) {
                $image3 = Storage::put($director, $request->image_3);
                $product->update([
                    'image_3'=> saveLinkImage($image3)
                ]);
            }
            if (!empty($request->image_4)) {
                $image4 = Storage::put($director, $request->image_4);
                $product->update([
                    'image_4' => saveLinkImage($image4)
                ]);
            }
            // Cretae size
            for($i = 1; $i < 14; $i++) {
                $index = 'size' . $i;
                if (empty($request[$index])) {
                    if (Product_size::checkSize($product->id, Product::getDetailSize($i))) {
                        Product_size::where([
                            'product_id' => $product->id,
                            'size' => Product::getDetailSize($i)
                        ])->delete();
                    }
                } else {
                    if (! Product_size::checkSize($product->id, Product::getDetailSize($i))) {
                        Product_size::create([
                            'product_id' => $product->id,
                            'size' => Product::getDetailSize($i)
                        ]);
                    }
                }
            }
            // Create color
            for($i = 1; $i < 20; $i++) {
                $index = 'color' . $i;
                if (empty($request[$index])) {
                    if (Product_color::checkColor($product->id, Product::getDetailColor($i))) {
                        Product_color::where([
                            'product_id' => $product->id,
                            'color_name' => Product::getDetailColor($i)
                        ])->delete();
                    }
                } else {
                    if (! Product_color::checkColor($product->id, Product::getDetailColor($i))) {
                        Product_color::create([
                            'product_id' => $product->id,
                            'color_name' => Product::getDetailColor($i)
                        ]);
                    }
                }
            }
            DB::commit();

            return redirect()->back()->with('messages', 'Update product successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->route('products.index')->with('error', $ex->getMessage());
        }
    }
    public function destroy(Product $product)
    {
        try {
            $product->delete();

            return redirect()->route('products.index')->with('messages', 'Delete product successfully!');
        } catch (Excetion $ex) {
            return redirect()->route('products.index')->with('error', $ex->getMessage());
        }
    }
}
