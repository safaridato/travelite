<?php
Class Profile extends CI_Controller{

    function __construct(){
        parent::__construct();
//        error_reporting(E_ALL);
//        ini_set("display_errors", 1);
    }



    public function Login(){
        $tpl_data['error_message'] = '';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $config = array(
            array(
                'field'   => 'username',
                'label'   => 'Username',
                'rules'   => 'required'
            ),
            array(
                'field'   => 'password',
                'label'   => 'Password',
                'rules'   => 'required'
            )
        );

        $this->form_validation->set_rules($config);


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view("profile/login", $tpl_data);
        }else{
            $user = $_POST['username'];
            $pass = hash('sha256',$_POST['password']);
            $this->load->model("auth_model");
            $status = $this->auth_model->checkauth($user, $pass);

            if($status){
                redirect(site_url());
            }else{
                $tpl_data['error_message'] = "Incorrect Authentication Data";
                $this->load->view("profile/login", $tpl_data);
            }


        }



    }




    public function Logoutuser(){
          $this->session->sess_destroy();
           redirect(base_url());
    }




}