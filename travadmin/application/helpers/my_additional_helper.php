<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: safari
 * Date: 7/11/13
 * Time: 10:59 PM
 * To change this template use File | Settings | File Templates.
 */
if (!function_exists('cropText')) {
    function cropText($text, $size)
    {
        if (strlen($text) > $size) {
            $text = join("", array_slice(preg_split("//u", $text, -1, PREG_SPLIT_NO_EMPTY), 0, 60)) . "...";    // mb_substr($text,0,$size,'UTF-8')."...";
        }
        return $text;
    }
}


//db helper clear result after called procedure etc ...
if (!function_exists('clear_result')) {
    function clear_result($result)
    {
        # $CI =& get_instance();

        $result->next_result();
        $result->free_result();
        //$result
    }
}


//random string generate
if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 10)
    {
        return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}


//client info

if (!function_exists('client_info')) {

    function client_info($type = "all")
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $CI =& get_instance();

        $CI->load->library('user_agent');

        $useragent = $CI->agent->agent_string();

        $info = array('ip' => $ip, 'user_agent' => $useragent);

        if ($type == "all") {
            return $info;
        } elseif ($type == "ip") {
            return $info['ip'];
        } elseif ($type == "useragent") {
            return $info['user_agent'];
        }

    }
}


if (!function_exists('json_header')) {

    function json_header()
    {
        header('Content-type: application/json');
    }
}


if (!function_exists('resize_image')) {

    function resize_image($file, $w, $h, $finalThumbDir, $fileName, $crop = false)
    {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        $newfile = 'filename.jpg';
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        //imagecopyresampled($finalThumbDir.$newfile, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        if (imagejpeg($dst, $finalThumbDir . $fileName, 100)) {
            return true;
        } else {
            return false;
        }

    }


}


if (!function_exists('ms_escape_string')) {
    function ms_escape_string($data)
    {
        if (!isset($data) or empty($data)) return '';
        if (is_numeric($data)) return $data;

        $non_displayables = array(
            '/%0[0-8bcef]/',            // url encoded 00-08, 11, 12, 14, 15
            '/%1[0-9a-f]/',             // url encoded 16-31
            '/[\x00-\x08]/',            // 00-08
            '/\x0b/',                   // 11
            '/\x0c/',                   // 12
            '/[\x0e-\x1f]/'             // 14-31
        );
        foreach ($non_displayables as $regex)
            $data = preg_replace($regex, '', $data);
        $data = str_replace("'", "''", $data);
        return $data;
    }

}


if (!function_exists('get_main_site_uri')) {
    function get_main_site_uri()
    {

        $CI =& get_instance();
        $uri = $CI->config->config['mainSite'];
        return $uri;

    }
}


if (!function_exists('pre_print_r')) {
    function pre_print_r($data = array())
    {

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}