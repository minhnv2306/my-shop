<?php

namespace App\Helper;


class DataHelper
{
    /**
     * Gen option values
     * @param int $from
     * @param int $to
     * @param int $default
     * @return string
     */

    public static function genOptionValues($array = [], $default){
        $html = '';
        $selected = '';

        foreach($array as $key=>$value) {
            if($key == $default) {
                $selected = 'selected="selected"';
            }
            $html .= '<option value="'. $key .'" '. $selected .'>'. $value .'</option>';
            $selected = '';
        }
        return $html;
    }

}