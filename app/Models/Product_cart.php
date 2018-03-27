<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_cart extends Model
{
    protected $guarded = ['id'];
    public $table = 'product_cart';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
