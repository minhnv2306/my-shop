<?php


if (!function_exists('convertEmailToUsername')) {
    function convertEmailToUsername($email)
    {
        return substr($email, 0, strpos($email, '@'));
    }
}



?>