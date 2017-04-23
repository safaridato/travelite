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


        $this->td['tours'] = $this->tours_model->GetToursList();
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


            //Set Product
            $incomeForm['tourName'] = $incomeForm['names'][1]['tourName'];

            if (!isset($incomeForm['thumb'])) {
                $incomeForm['thumb'] = '';
            }

            $tourId = $this->tours_model->SetTour($incomeForm);
            $thumb = $this->_ThumbUpload($_FILES, $tourId);

            if ($thumb['thumb'] && $tourId > 0) {
                //set thumb to tour by tour id
                $this->tours_model->SetThumb($tourId, "/travelite" . $thumb['thumb']);
            }


            //bind categories

            $subCategories = array();
            if (array_key_exists('subcategory', $incomeForm)) {
                $subCategories = $incomeForm['subcategory'];
            }

            if (isset($incomeForm['category']) && $tourId > 0) {
                $this->tours_model->SetCategories($tourId, $subCategories, $incomeForm['category']);
            }


            if ($tourId > 0) {
                header("Location: " . base_url() . "toursmanager/edit/" . $tourId);
            } else {
                echo "Product Add Problem Please Contact Administrator";
            }

        }


        $this->td['categories'] = $this->tours_model->GetToursMainCategories();
        $this->load->view('main_tpl', $this->td);
    }


    public function edit($tourId = false)
    {
        $this->td['content'] = "toursmanager/edit";


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
            $incomeForm = $this->input->post(null, false);

//echo "<pre>";
//            print_r($incomeForm);
//            die('');


            //Set Product
            $incomeForm['tourName'] = $incomeForm['names'][1]['tourName'];

            if (!isset($incomeForm['thumb'])) {
                $incomeForm['thumb'] = '';
            }

            $tourId = $this->tours_model->SetTour($incomeForm);
            $thumb = $this->_ThumbUpload($_FILES, $tourId);

            if ($thumb['thumb'] && $tourId > 0) {
                //set thumb to tour by tour id
                $this->tours_model->SetThumb($tourId, "/travelite" . $thumb['thumb']);
            }


            //bind categories

            $subCategories = array();
            if (array_key_exists('subcategory', $incomeForm)) {
                $subCategories = $incomeForm['subcategory'];
            }

            if (isset($incomeForm['category']) && $tourId > 0) {
                $this->tours_model->DeleteTourCategories($tourId);
                $this->tours_model->SetCategories($tourId, $subCategories, $incomeForm['category']);
            }


//            if($tourId > 0){
//                header("Location: ".base_url()."toursmanager/edit/".$tourId);
//            }else{
//                echo "Product Add Problem Please Contact Administrator";
//            }

        }

        $this->td['tourDetails'] = $this->tours_model->GetTourDetails($tourId);

        if (empty($this->td['tourDetails'])) {
            // header("Location: /janashiacms/productsmanager");
        }

        $this->td['categories'] = $this->tours_model->GetToursMainCategories();
        $this->load->view('main_tpl', $this->td);
    }


    protected function _ThumbUpload($files, $tourId)
    {

        if (isset($files["thumb"]) && isset($files["thumb"]['name']) && $files["thumb"]['name'] != '') {

            $imgDir = $tourId . "/";
            $lnkDir = "/cdn/tourimages/" . $imgDir;
            $lnkThumbsDir = "/cdn/tourimages/" . $imgDir . "thumbs/";
            $filesDir = $_SERVER['DOCUMENT_ROOT'] . "/travelite/" . $lnkDir;   //"C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";

            $thumb = 'thumbs/';

            if (!file_exists($filesDir)) {
                mkdir($filesDir, 0777, true);
                mkdir($filesDir . $thumb, 0777, true);
            }


            $finalDir = $filesDir;
            $finalThumbDir = $filesDir . $thumb;

            $i = 0;


            $extArray = explode('.', $files["thumb"]['name']);
            $ext = end($extArray);
            $picName = 'pic_' . uniqid() . '.' . $ext;


            # resize_image($val, 300, 450, $finalThumbDir, $_FILES["file1"]['name'][$key], false);
            resize_image($files["thumb"]['tmp_name'], 330, 244, $finalThumbDir, $picName, false);

            if (!$files["thumb"]['tmp_name']) { // if file not chosen
                echo "ERROR: Please browse for a file before clicking the upload button.";
                exit();
            }
            if (move_uploaded_file($files["thumb"]['tmp_name'], $finalDir . $picName)) {
                chmod($finalDir . $picName, 0777);

                return array('thumb' => $lnkThumbsDir . $picName, 'pic' => $lnkDir . $picName);

            }

        }
        return array('thumb' => false, 'pic' => false);
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