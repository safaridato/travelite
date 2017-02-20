<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('lang_id')) {
    function lang_id(){
        $CI =& get_instance();
        $lang_id = $CI->config->config['lang_id'];
        return $lang_id;
    }
}



if ( ! function_exists('lang_abbr'))
{
    function lang_abbr(){
        $CI =& get_instance();
        $lang_abbr = $CI->config->config['language_abbr'];
        return $lang_abbr;
    }

}