<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $td = array();

    function __construct(){
        parent::__construct();
        if(simple_check_grants() === false){
            redirect(login_url(), 'location');
        }
        $this->td['content'] = "dashboard/index";
    }

	public function index()
	{
		$this->load->view('main_tpl',$this->td);
	}
}
