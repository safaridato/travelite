<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Tours extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('tours_model');
    }

    public function index($tourCategoryId = false)
    {


        $td = array();
        $td['category'] = array();

        if ($tourCategoryId > 0) {
            $td['category'] = $this->tours_model->GetTourCategoryDetails($tourCategoryId);
        }


        $td["categories"] = $this->tours_model->GetToursCategoriesList();

        $td["content"] = cvf(); //"index";
        $this->load->view('shared/_layout', $td);
    }

    public function details($id)
    {
        $td = array();



        $td["content"] = cvf("details"); //"index";
        $td["tourId"] = $id; //"index";
        $this->load->view('shared/_layout', $td);
    }
}
