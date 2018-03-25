<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_cart extends Model
{
    protected $guarded = ['id'];
    public $table = 'product_cart';
}
