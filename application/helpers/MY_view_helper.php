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




if (!function_exists('SetActive')) {

    function SetActive($className = '', $htmlClass = "active")
    {
        $CI =& get_instance();
        $class = $CI->router->class;

        if($class == $className){
            return $htmlClass;
        }

        return "";
    }
}



