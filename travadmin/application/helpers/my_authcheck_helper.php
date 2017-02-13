<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: safari
 * Date: 12/31/13
 * Time: 11:38 PM
 * To change this template use File | Settings | File Templates.
 */

if (!function_exists('simple_check_login')) {
    function simple_check_login($class_name = false)
    {
        $CI =& get_instance();
        // $token  = $CI->session->userdata('token');
//        if(!$token){
//            return false;
//        }else{
        if ($class_name) {
            if (check_grants($class_name)) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
        //  return $token;
        //}
    }
}


if (!function_exists('simple_check_grants')) {
    function simple_check_grants()
    {
        $CI =& get_instance();
        $grants = $CI->session->userdata('grants');

            if (!empty($grants)) {
                return true;
            } else {
                return false;
            }

    }
}

if (!function_exists('check_grants')) {
    function check_grants($class_name)
    {
        $CI =& get_instance();
        $grants = $CI->session->userdata('grants');
        if (is_array($grants)) {

            if ($class_name && in_array($class_name, $grants)) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}


if (!function_exists('login_url')) {
    function login_url()
    {
        $CI =& get_instance();
//        $login_url = $CI->session->userdata('token');
        //get from settings file
        $login_url = base_url() . "" . $CI->config->item('login_url');
        return $login_url;
    }

}

if (!function_exists('check_login')) {
    function check_login()
    {
        $CI =& get_instance();
        $token = simple_check_login();
        if ($token) {
            $query = "[dbo].[GetLocalUserToken]
		              @UserToken = N'" . $token . "'";
            $result = $CI->db->query($query);
            $result_data = $result->result_array();
            if ($result_data[0]['Code'] == 0) {
                return $result_data[0]['Value']; //return user ID by Token
            } else {
                $CI->session->unset_userdata('token');
                return false;
            }
        } else {
            $CI->session->unset_userdata('token');
            return false;
        }

    }

}

if (!function_exists('get_user_firstname')) {
    function get_user_firstname()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['FirstName'])) {
            return $user_data[0]['FirstName'];
        } else {
            return 'John Doe';
        }
    }

}

if (!function_exists('get_user_sex')) {
    function get_user_sex()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['U_Sex'])) {
            return $user_data[0]['U_Sex'];

        } else {
            return 'Female';
        }
    }

}

if (!function_exists('get_user_id')) {
    function get_user_id()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['userID'])) {
            return $user_data[0]['userID'];
        } else {
            return 0;
        }
    }

}

if (!function_exists('get_user_country')) {
    function get_user_country()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['U_Sender'])) {
            return $user_data[0]['U_Sender'];
        } else {
            return 0;
        }
    }

}
if (!function_exists('get_user_country_id')) {
    function get_user_country_id()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['U_Sender_ID'])) {
            return $user_data[0]['U_Sender_ID'];
        } else {
            return 0;
        }
    }

}

if (!function_exists('get_user_registrant_id')) {
    function get_user_registrant_id()
    {
        $CI =& get_instance();
        $user_data = $CI->session->userdata('user_data');

        if (isset($user_data[0]['registrant_id'])) {
            return $user_data[0]['registrant_id'];
        } else {
            return 0;
        }
    }

}