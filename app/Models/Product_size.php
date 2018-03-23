<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    protected $guarded = ['id'];
    public $table = 'product_size';
    public static function checkSize($product_id, $size)
    {
        return self::where([
            'product_id' => $product_id,
            'size' => $size,
        ])->first() ? 1 : 0;
    }
}
