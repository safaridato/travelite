<?php defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if (!function_exists('cvf')) {

    function cvf($view = false)
    {
        $CI =& get_instance();
        $classFolder = $CI->router->class;
        return $view != false ? $classFolder . "/" . $view : $classFolder."/index";
    }
}