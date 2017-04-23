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

        $id = $this->input->post("CategoryId",True);

        // if (!empty($filterData)) {
        $this->load->model('tours_model');

        $tours = $this->tours_model->GetToursList($id);

        //$this->mailsend_model->SendContactData($contactData['email'], $contactData['fullName'], $contactData['message']);
        //}
        echo json_encode(array('Code' => 0, 'Status' => 'Success', 'Data' => $tours));
    }

    public function GetTourDetails()
    {
        $id = $this->input->post("TourId",True);
        $this->load->model('tours_model');
        $tourDetails = $this->tours_model->GetTourDetails($id);
        echo json_encode(array('Code' => 0, 'Status' => 'Success', 'Data' => $tourDetails));
    }


}
