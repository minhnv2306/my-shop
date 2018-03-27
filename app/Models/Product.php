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
    public static function getBaseList($param = array())
    {
        $query = self::select('*')
            ->orderBy('id', 'desc');
        return $query;
    }
    public static function getMade()
    {
        return array(
            'Imported' => 'Imported',
            'Domestic' => 'Domestic',
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
            '1' => 'Black',
            '2' => 'Navy',
            '3' => 'Slate',
            '4' => 'Asphalt',
            '5' => 'Silver',
            '6' => 'Red',
            '7' => 'Cranberry',
            '8' => 'White',
            '9' => 'Royal Blue',
            '10' => 'Brown',
            '11' => 'Olive',
            '12' => 'Baby Blue',
            '13' => 'Lemon',
            '14' => 'Pink',
            '15' => 'Kelly Green',
            '16' => 'Heather Grey',
            '17' => 'Heather Blue',
            '18' => 'Dark Heather',
            '19' => 'Orange',
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
            '4' => 'XL',
            '5' => '2XL',
            '6' => '3XL',
            '7' => '4XL',
            '8' => '5XL',
            '9' => 'YXS',
            '10' => 'YS',
            '11' => 'YM',
            '12' => 'YL',
            '13' => 'YXL'
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
    public static function search($param = array())
    {
        $result = self::select('*');
        if (!empty($param['key'])) {
            $result = $result->where('name', 'like', '%' . $param['key'] . '%');
        }
        if (!empty($param['orderby'])) {
            $option = empty($param['option']) ? 'asc' : $param['option'];
            $result = $result->orderBy($param['orderby'], $option);
        }
        return $result->paginate(12);
    }

}
