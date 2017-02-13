<?php

if (!function_exists('json_header')) {
    function json_header()
    {
        return header('Content-type: application/json');
    }
}
if (!function_exists('angular_base')) {
    function angular_base()
    {
        $CI =&get_instance();

        $conf = $CI->config->item('angular');
        return $conf['base'];
    }
}