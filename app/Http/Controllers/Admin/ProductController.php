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
        $colors_men = Product_color::where([
                ['product_id', $product->id],
                ['sex', 'Men']
            ])
            ->pluck('color_name')
            ->toArray();;
        $colors_women = Product_color::where([
                ['product_id', $product->id],
                ['sex', 'Women']
            ])
            ->pluck('color_name')
            ->toArray();
        return view('admin.product.show', [
            'product' => $product,
            'colors_men' => $colors_men,
            'colors_women' => $colors_women,
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
                'description',
            ]);

            $product->update($data);
            $colors = Product::getColor();

            // Process color for men
            foreach ($colors as $color) {
                // If color for men is checked
                if(in_array($color, $request->colors_men)) {
                    if (!Product_color::checkColor($product->id, $color, 'Men')) {
                        Product_color::create([
                            'product_id' => $product->id,
                            'color_name' => $color,
                            'sex' => 'Men'
                        ]);
                    }
                } else {
                    // If color for men isnot checked
                    if (Product_color::checkColor($product->id, $color, 'Men')) {
                        Product_color::where([
                            'product_id' => $product->id,
                            'color_name' => $color,
                            'sex' => 'Men'
                        ])->delete();
                    }
                }
            }

            // process color for women
            foreach ($colors as $color) {
                // If color for men is checked
                if(in_array($color, $request->colors_women)) {
                    if (!Product_color::checkColor($product->id, $color, 'Women')) {
                        Product_color::create([
                            'product_id' => $product->id,
                            'color_name' => $color,
                            'sex' => 'Women'
                        ]);
                    }
                } else {
                    // If color for men isnot checked
                    if (Product_color::checkColor($product->id, $color, 'Women')) {
                        Product_color::where([
                            'product_id' => $product->id,
                            'color_name' => $color,
                            'sex' => 'Women'
                        ])->delete();
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
    public function createProductByFile(Request $request)
    {
        $text = file_get_contents($request->file);
        $data = json_decode($text);
        try {
            DB::beginTransaction();
            foreach ($data as $item) {
                $name = $item->name;
                $price = $item->price;
                $description = $item->mota;
                $avatar = empty($item->img[0]) ? '' : $item->img[0];
                $product = Product::create([
                    'name' => $name,
                    'price' => $price,
                    'description' => $description,
                    'avatar' => $avatar
                ]);

                $i = 1;
                $image = array('', '', '', '', '');
                if (count($item->listcolor) > 0) {
                    foreach ($item->listcolor as $product_color) {
                        Product_color::create([
                            'product_id' => $product->id,
                            'color_name' => $product_color->namecolor,
                            'sex' => $product_color->sex,
                            'imglink' => $product_color->imglink,
                        ]);
                        if ($i < 5) {
                            $image[$i] = empty($product_color->imglink) ? '' : $product_color->imglink;
                        }
                        $i++;
                    }
                    $product->update([
                        'image_1' => $image[1],
                        'image_2' => $image[2],
                        'image_3' => $image[3],
                        'image_4' => $image[4],
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('products.index')->with('messages', 'Create product successfully!');
        } catch (Exception $ex) {
            return redirect()->route('products.index')->with('error', $ex->getMessage());
        }
    }
}
