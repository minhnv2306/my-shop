<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    public static function getType()
    {
        return array(
            'man' => 'Man',
            'women' => 'Women',
        );
    }
    public static function getMade()
    {
        return array(
            'imported' => 'Imported',
            'domestic' => 'Domestic',
        );
    }
    public static function getCotton()
    {
        return array(
            '100%' => '100%',
            '80%' => '80%',
            '50%' => '50%'
        );
    }
    public static function getColor()
    {
        return array(
            '1' => 'black',
            '2' => 'white',
            '3' => 'red',
        );
    }
    public static function getDetailColor($key)
    {
        $colors = self::getColor();
        if (!empty($colors)) {
            return $colors[$key];
        }
        return '';
    }
    public static function getSize()
    {
        return array(
            '1' => 'S',
            '2' => 'M',
            '3' => 'L',
        );
    }
    public static function getDetailSize($key)
    {
        $sizes = self::getSize();
        if (!empty($sizes)) {
            return $sizes[$key];
        }
        return '';
    }
}
