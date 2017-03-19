<?php
/**
 * Created by PhpStorm.
 * User: safari
 * Date: 3/19/2017
 * Time: 12:10 PM
 */


class Bookingmanager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (simple_check_grants() === false) {
            redirect(login_url(), 'location');
        }

        $this->load->model('slides_model');
        $this->td['content'] = "bookingmanager/index";
    }


    public function index()
    {
        $this->load->view('main_tpl', $this->td);
    }


}