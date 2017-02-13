<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model{
var $dbAdmin;
    function  __construct(){
        parent::__construct();
        $this->dbAdmin = $this->load->database('admindb', TRUE);
    }


 public function checkauth($username, $password){


     $query = " call CheckUser(
		'".$username."',
		'".$password."');";

     $result = $this->dbAdmin->query($query);
     $result_data = $result->result_array();
     $result->next_result();

     if($result_data[0]['ID'] > 0 && $result_data[0]['UserName'] != ""){
         $grants = $this->get_user_grants($result_data[0]['ID']);
//
//         $this->session->set_userdata('token', $result_data[0]['Value']);
//
//
         $grants_list = array();
         foreach($grants as $key=>$val){
             $grants_list[$val['ID']] = $val['ControllerName'];
         }
         $this->session->set_userdata('grants',$grants_list);
        // $user_data = $this->get_userdata($result_data[0]['UserID']);
         $this->session->set_userdata('user_data',$result_data);
         return true;
     }else{
         return false;
     }

 }


    public function get_user_grants($user_id = false){

        $query = "call GetUserGrants(
		'".$user_id."');";

        $result = $this->dbAdmin->query($query);
        $result_data = $result->result_array();
        $result->next_result();
        return $result_data;
    }


}