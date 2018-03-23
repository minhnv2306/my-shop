<?php


if (!function_exists('convertEmailToUsername')) {
    function convertEmailToUsername($email)
    {
        return substr($email, 0, strpos($email, '@'));
    }
}
if (!function_exists('getLinkImage')) {
    function getLinkImage($link_temp)
    {
        return '/storage/' . $link_temp;
    }
}
if (!function_exists('saveLinkImage')) {
    function saveLinkImage($link_temp)
    {
        return substr($link_temp, 7);
    }
}
if (!function_exists('checkRadio')) {
    function checkRadio($value, $array = [])
    {
        return in_array($value, $array) ? 'checked' : '';
    }
}



?>