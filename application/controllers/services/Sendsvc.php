<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sendsvc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
            $_POST = json_decode(file_get_contents('php://input'), true);

        echo json_header();
    }

    public function SendContactMessage()
    {
        $contactData = $this->input->post(null, true);

        if (!empty($contactData)) {
            $this->load->model('mailsend_model');

            $this->mailsend_model->SendContactData($contactData['email'], $contactData['fullName'], $contactData['message']);
        }

        echo json_encode(array('Code' => 0, 'Status' => 'Success'));

    }

    public function Subscribe()
    {

        $contactMail = $this->input->post('mail', true);
        if ($contactMail != '') {
            $this->load->model('mailsend_model');
            $this->mailsend_model->SubscribeMailLocal($contactMail);
        }

        echo json_encode(array('Code' => 0, 'Status' => 'Success'));
    }
}