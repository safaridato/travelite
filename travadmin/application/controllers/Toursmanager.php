<?php


class Toursmanager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (simple_check_grants() === false) {
            redirect(login_url(), 'location');
        }

        $this->load->model('tours_model');
        $this->td['content'] = "toursmanager/index";
    }


    public function index()
    {
        $this->load->view('main_tpl', $this->td);
    }

    public function add()
    {
        $this->td['content'] = "toursmanager/add";


        $config = array(
            array(
                'field' => 'names[1][tourName]',
                'label' => 'Tour Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'names[1][tourdescription]',
                'label' => 'Tour Preview',
                'rules' => 'required'
            ),

        );

        $this->form_validation->set_rules($config);


        if ($this->form_validation->run() == FALSE) {


        } else {
            $incomeForm = $this->input->post(null, true);

            echo "<pre>";
            print_r($incomeForm);


            //Set Product
            $incomeForm['tourName'] = $incomeForm['names'][1]['tourName'];


            $tourId = $this->tours_model->SetTour($incomeForm);

            //set Descriptions per language
            echo "****".$tourId."******";

            //bind categories


        }


        $this->td['categories'] = $this->tours_model->GetToursMainCategories();
        $this->load->view('main_tpl', $this->td);
    }

//    public function edit(){
//
//        if($tourId > 0){
//
//            $this->tours_model->GetTourDetails();
//        }
//
//
//        $this->td['categories'] = $this->tours_model->GetToursMainCategories();
//        $this->load->view('main_tpl', $this->td);
//
//    }
}