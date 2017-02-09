<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Language Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Language
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/language.html
 */
class MY_Lang extends CI_Lang {

    function __construct(){
        parent::__construct();

        global $URI, $CFG, $IN;

        $config =& $CFG->config;


        $index_page    = $config['index_page'];
       // $lang_ignore   = $config['lang_ignore'];
        $default_abbr  = $config['language_abbr'];
        $ui_abbr       = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); //iso format ka ru en ...
        $lang_uri_abbr = $config['lang_uri_abbr'];


       // $set_abbr = 'ru';
        /* get the language abbreviation from uri */
        $set_abbr = $URI->segment(1);
        // $uri_abbr = 'ru';
     //   echo $set_abbr;

        #$URI->assoc_to_uri();
        //var_dump($URI->total_segments());
        //var_dump($URI->uri_to_assoc(0));

//echo $default_abbr;

        if(!$set_abbr || !array_key_exists($set_abbr, $lang_uri_abbr)){
            $set_abbr = false;
        }



//print_r($lang_uri_abbr);
//        if (strlen($set_abbr) == 2) {
//
//                /* reset the uri identifier */
//                $index_page .= empty($index_page) ? '' : '/';
//
//                /* remove the invalid abbreviation */
//                $URI->uri_string = preg_replace("|^\/?$set_abbr\/?|", '', $URI->uri_string);
//
//                /* redirect */
//                header('Location: '.$config['base_url'].$index_page.$URI->uri_string);
//                exit;
//        }



        /* adjust the uri string leading slash */

        //$urlstring = preg_replace("|^\/?|", '/', $URI->uri_string);
       // echo $urlstring ;


        //Let Start
        /* get the language_abbreviation from cookie */
        $lang_abbr     = $IN->cookie($config['cookie_prefix'].'user_lang');


        //ignore user choice and start all processes again and again
        //if ($lang_ignore) {



      //  }else{

            //read cookie for language abbriviation
            $lang_abbr = $IN->cookie($config['cookie_prefix'].'user_lang');


            if(isset($lang_abbr) && $lang_abbr != "" && array_key_exists($lang_abbr, $lang_uri_abbr)){
                //stay and do nothing
               // exit;

                if(isset($set_abbr) && $set_abbr && $set_abbr !="" && array_key_exists($set_abbr, $lang_uri_abbr)){
                    // set default language
                    $this->set_default_lang($set_abbr, 1);


                            if (strlen($set_abbr) == 2) {

                /* reset the uri identifier */
                $index_page .= empty($index_page) ? '' : '/';
//echo $URI->uri_string;
                /* remove the invalid abbreviation */
                $URI->uri_string = preg_replace("|^\/?$set_abbr\/?|", '', $URI->uri_string);

//                                if ($_SERVER['REMOTE_ADDR'] == '31.192.27.149') {
//                                    echo $config['base_url'] . $URI->uri_string;
//                                    die('under construction 1');
//                                }
                /* redirect */
               // header('Location: '.$config['base_url'].$index_page.$URI->uri_string);
                header('Location: '.$config['base_url'].$URI->uri_string);
               exit;
        }



                }else{
                    $this->set_default_lang($lang_abbr, 0);
                }

            }else{

                //if(isset($set_abbr) && array_key_exists($set_abbr, $lang_uri_abbr)){
                if(isset($set_abbr) && $set_abbr !="" && array_key_exists($set_abbr, $lang_uri_abbr)){
                    $config['language']      = $lang_uri_abbr[$set_abbr];
                    $config['language_abbr'] = $set_abbr;
                    $IN->set_cookie('user_lang', $set_abbr, $config['sess_expiration']);
                    $this->set_default_lang($set_abbr, 1);

                }else{
                    $config['language']      = $lang_uri_abbr[$default_abbr];
                    $config['language_abbr'] = $default_abbr;
                    $IN->set_cookie('user_lang', $default_abbr, $config['sess_expiration']);
                    $this->set_default_lang($default_abbr, 1);
                }

                $config['language']      = $lang_uri_abbr[$default_abbr];
                $config['language_abbr'] = $default_abbr;
                $IN->set_cookie('user_lang', $default_abbr, $config['sess_expiration']);
                $this->set_default_lang($default_abbr, 1);

                //if($_SERVER['REMOTE_ADDR'] == '31.192.27.149'){
                   // echo $config['base_url'].$URI->uri_string;
                 //   die('under construction');
                //}

//             header('Location: '.$config['base_url'].$URI->uri_string);
//             exit;
            }
      //  }





//
//
//        if ($lang_ignore) {
//
//            if (isset($lang_uri_abbr[$uri_abbr])) {
//
//                /* set the language_abbreviation cookie */
//                $IN->set_cookie('user_lang', $uri_abbr, $config['sess_expiration']);
//
//            } else {
//
//                /* get the language_abbreviation from cookie */
//                $lang_abbr = $IN->cookie($config['cookie_prefix'].'user_lang');
//
//            }
//
////            if (strlen($uri_abbr) == 2) {
////
////                /* reset the uri identifier */
////                $index_page .= empty($index_page) ? '' : '/';
////
////                /* remove the invalid abbreviation */
////                $URI->uri_string = preg_replace("|^\/?$uri_abbr\/?|", '', $URI->uri_string);
////
////                /* redirect */
////                header('Location: '.$config['base_url'].$index_page.$URI->uri_string);
////                exit;
////            }
//
//        } else {
//
//            /* set the language abbreviation */
//            $lang_abbr = $uri_abbr;
//        }
//
//        #$lang_abbr = 'ka';
//        /* check validity against config array */
//        if (isset($lang_uri_abbr[$lang_abbr])) {
//
//            /* reset uri segments and uri string */
//            $URI->_reindex_segments(array_shift($URI->segments));
//            $URI->uri_string = preg_replace("|^\/?$lang_abbr|", '', $URI->uri_string);
//
//            /* set config language values to match the user language */
//            $config['language'] = $lang_uri_abbr[$lang_abbr];
//            $config['language_abbr'] = $lang_abbr;
//
//            /* if abbreviation is not ignored */
//            if ( ! $lang_ignore) {
//
//                /* check and set the uri identifier */
//                $index_page .= empty($index_page) ? $lang_abbr : "/$lang_abbr";
//
//                /* reset the index_page value */
//                $config['index_page'] = $index_page;
//            }
//
//            /* set the language_abbreviation cookie */
//            $IN->set_cookie('user_lang', $lang_abbr, $config['sess_expiration']);
//
//        } else {
//
//            /* if abbreviation is not ignored */
////            if ( ! $lang_ignore) {
////
////                /* check and set the uri identifier to the default value */
////                $index_page .= empty($index_page) ? $default_abbr : "/$default_abbr";
////
////                if (strlen($lang_abbr) == 2) {
////
////                    /* remove invalid abbreviation */
////                    $URI->uri_string = preg_replace("|^\/?$lang_abbr|", '', $URI->uri_string);
////                }
////
////                /* redirect */
////                header('Location: '.$config['base_url'].$index_page.$URI->uri_string);
////                exit;
////            }
//
//            /* set the language_abbreviation cookie */
//            $IN->set_cookie('user_lang', $default_abbr, $config['sess_expiration']);
//        }



    }




    protected  function set_default_lang($language_abbr, $change_service_lang)
    {
        global $URI, $CFG, $IN, $CI;
        $config =& $CFG->config;

        $index_page      = $config['index_page'];
        //$lang_ignore     = $config['lang_ignore'];
        $default_abbr    = $config['language_abbr'];
        $lang_abbr_id    = $config['lang_abbr_id'];
        $ui_abbr       = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); //iso format ka ru en ...
        $lang_uri_abbr = $config['lang_uri_abbr'];


        $config['language']      = $lang_uri_abbr[$language_abbr];
        $config['language_abbr'] = $language_abbr;
        $config['lang_id']       = $lang_abbr_id[$language_abbr];

        if($change_service_lang){
            $config['change_language_action'] = 1;
        }

        $IN->set_cookie('user_lang', $language_abbr, $config['sess_expiration']);
        //header('Location: '.$config['base_url'].$index_page.'/'.$this->URI->uri_string);
        //redirect('http://test.paystore.ge/index.php', 'location');
        //exit;
        #header('Location: '.$config['base_url'].$index_page.'/'.$URI->uri_string);
        return true;
    }
}
