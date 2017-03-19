<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: safari
 * Date: 2/8/2017
 * Time: 1:10 AM
 */
class Contact extends CI_Controller
{

    public function index()
    {

        $td["sentstatus"] = 0;

        $this->load->helper(array('form'));

        $this->load->library('form_validation');


        $config = array(
            array(
                'field' => 'name',
                'label' => 'Full Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Your email',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'msgs',
                'label' => 'Email Message',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('myform');
        } else {

            $this->load->model("mailsend_model");

            $incomeData = $this->input->post(null, true);

            $this->mailsend_model->SendContactDataLocal($incomeData['email'], $incomeData['name'], $incomeData['phone'], $incomeData['msgs']);

            $td["sentstatus"] = 1;
        }


        $td = array();
        $td["content"] = cvf(); //"index";
        $this->load->view('shared/_layout', $td);


    }
}
