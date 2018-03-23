<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_color extends Model
{
    protected $guarded = ['id'];
    public $table = 'product_color';

    public static function checkColor($product_id, $color_name)
    {
        return self::where([
            'product_id' => $product_id,
            'color_name' => $color_name,
        ])->first() ? 1 : 0;
    }
}
