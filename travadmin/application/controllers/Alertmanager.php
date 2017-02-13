<?php
class Alertmanager extends CI_Controller{

    function __construct()
    {
        parent::__construct();
//
//        if(simple_check_login($this->router->class) === false){
//            redirect(login_url(), 'location');
//        }

       // $this->td['content'] = "campaigns/index";
        $this->load->model("services/Notifier_model");
    }



    public function GetOrderAlerts(){
      $orders = $this->Notifier_model->GetAlertOrders();
      print_r($orders);
    }


    public function ViewOrder($orderAlertId = 0){



    }





}