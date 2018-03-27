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
            '2' => 'White',
            '3' => 'Red',
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
