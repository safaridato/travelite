<?php defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('json_header')) {
    function json_header()
    {
        return header('Content-type: application/json');
    }
}
if (!function_exists('xml_header')) {
    function xml_header()
    {
        return header("Content-type: text/xml");
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


if (!function_exists('print_metas')) {
    function print_metas($currentLnk = '')
    {
        $currentLnk = '/'.$currentLnk;
        $CI =&get_instance();
        $lang_id = $CI->config->config['lang_id'];

        // get static meta links array
        $staticMetaLinks = $CI->sitemap_model->GetMetaLinks();
        //if($currentLnk != ''){
        $pageTitle = '<title>Janashia Store</title>';

        // if url found in static links array lets print metas
        if(!empty($staticMetaLinks) && array_key_exists($currentLnk, $staticMetaLinks)){


            $metaArray = $CI->sitemap_model->GetMetaTagsByLink($currentLnk, $lang_id);
            $title = $CI->sitemap_model->GetPagTitle($currentLnk, $lang_id);

            $meta = '';


            foreach($metaArray as $key=>$val){
                $meta .= '<meta '.$val['PropName'].'="'.$val['AttrValue'].'" content="'.$val['Content'].'"/>';
            }
            if(!empty($title) && isset($title[0]['PageTitle'])){
                $pageTitle = '<title>'.$title[0]['PageTitle'].' | Janashia Store</title>';
            }


            return $pageTitle.$meta;
        }else{
            //try to search in products list
//echo $currentLnk;
            if(strpos($currentLnk, '/shop/product/') !== false){
                $explodedUrl = explode("/",$currentLnk);
                $poductId =  end($explodedUrl);

                if((int)$poductId > 0){
                    // retreive product Meta params
                    $product = $CI->sitemap_model->GetProductDetails($poductId, $lang_id);
//productName
                    if(!empty($product)){
                        if(array_key_exists('0', $product) && isset($product[0]['productName'])){
                            $pageTitle = '<title>'.$product[0]['productName'].' | Janashia Store</title>';
                        }
                        $productParams['product'] = $product[0];
                        return $pageTitle.$CI->load->view('header/default_product_metas', $productParams, true);
                    }else{
                        return $pageTitle;
                    }
                }
            }else{
                return $pageTitle;
            }


        }





        // echo uri_string();
            //$conf = $CI->config->item('angular');
            //$CI
            // return $conf['base'];
          //  return true;
        //}else{
          //  return '';
        //}

    }
}



if (!function_exists('print_titletext')) {
    function print_titletext($currentLnk = '')
    {

       // $currentLnk = '/'.$currentLnk;
        $CI =&get_instance();
        $lang_id = $CI->config->config['lang_id'];

        // get static meta links array
        $staticMetaLinks = $CI->sitemap_model->GetMetaLinks();
        //if($currentLnk != ''){
        $pageTitle = 'Janashia Store';

        // if url found in static links array lets print metas
        if(!empty($staticMetaLinks) && array_key_exists($currentLnk, $staticMetaLinks)){


            //$metaArray = $CI->sitemap_model->GetMetaTagsByLink($currentLnk, $lang_id);
            $title = $CI->sitemap_model->GetPagTitle($currentLnk, $lang_id);
            if(!empty($title) && isset($title[0]['PageTitle'])){
                $pageTitle = ''.$title[0]['PageTitle'].' | Janashia Store';
            }


            return $pageTitle;
        }else{

            //try to search in products list
//echo $currentLnk;
            if(strpos($currentLnk, 'shop/product/') !== false){

                if(substr($currentLnk,-1) == '/'){
                    $currentLnk = substr($currentLnk, 0, strlen($currentLnk)-1);
                }

                $explodedUrl = explode("/",$currentLnk);
                $poductId =  end($explodedUrl);
                if((int)$poductId > 0){
                    // retreive product Meta params
                    $product = $CI->sitemap_model->GetProductDetails($poductId, $lang_id);
//productName
                    if(!empty($product)){
                        if(array_key_exists('0', $product) && isset($product[0]['productName'])){
                            $pageTitle = ''.$product[0]['productName'].' | Janashia Store';
                        }
                        return $pageTitle;
                    }else{
                        return $pageTitle;
                    }
                }
            }else{
                return $pageTitle;
            }

        }

    }
}