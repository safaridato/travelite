<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tourssvc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
            $_POST = json_decode(file_get_contents('php://input'), true);

        echo json_header();
    }


    public function GetTours()
    {
        //$filterData = $this->input->post(null, true);

       // if (!empty($filterData)) {
            $this->load->model('tours_model');

            $tours = $this->tours_model->GetToursList();

            //$this->mailsend_model->SendContactData($contactData['email'], $contactData['fullName'], $contactData['message']);
        //}
        echo json_encode(array('Code' => 0, 'Status' => 'Success', 'Data' => $tours));
    }


}
