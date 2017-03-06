<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: safari
 * Date: 2/8/2017
 * Time: 1:10 AM
 */

class Useful extends CI_Controller
{

    public function index()
    {
        $td = array();
        $td["content"] = cvf(); //"index";
        $this->load->view('shared/_layout', $td);
    }
}
