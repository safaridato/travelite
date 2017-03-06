<?php

class Tourssvc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("services/tourssvc_model");
        json_header();
    }


    public function GetSubcategories()
    {
        $categoryId = $this->input->post('categoryId', true);
        $tourId = $this->input->post('tourId', true);

        $subCatsList = array();
        if ($categoryId > 0 && $tourId >= 0) {

            $subCatsList = $this->tourssvc_model->GetSubCategoriesList($categoryId, $tourId);

        }

        echo json_encode($subCatsList);

    }



    public function SetTour(){

        $incomeForm = $this->input->post(null, true);

        echo json_encode($incomeForm);
    }


}