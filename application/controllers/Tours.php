<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Tours extends CI_Controller
{

    public function index()
    {
        $td = array();
        $td["content"] = cvf(); //"index";
        $this->load->view('shared/_layout', $td);
    }

    public function details($id)
    {
        $td = array();
        $td["content"] = cvf("details"); //"index";
        $this->load->view('shared/_layout', $td);
    }
}
