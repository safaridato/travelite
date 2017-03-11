<?php

class Categoriesmanager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (simple_check_login($this->router->class) === false) {
            redirect(login_url(), 'location');
        }
        $this->td['content'] = "categories/index";
        $this->load->model("services/categoriessvc_model");
    }


    public function index()
    {

        $this->td['categoriesList'] = $this->categoriessvc_model->GetCategoriesList();

        $this->load->view('main_tpl', $this->td);
    }

    /*
        public function AjaxSetSubCategory()
        {
            json_header();

            $incomeData = $this->input->post(null, true);
            $subCategoryName = $incomeData['categoryNames']['1']['name'];

            $CategoryId = $this->input->post('categoryId', true);

            $setResult = $this->categoriessvc_model->SetCategory($subCategoryName, 0, '', $CategoryId);

            foreach ($incomeData['categoryNames'] as $key => $val) {
                $this->categoriessvc_model->SetCategoryTranslation($setResult['categoryId'], $val['name'], $val['description'], $key);
            }


            echo json_encode(array('resultId' => $setResult));
        }*/

    public function AjaxSetCategory()
    {
        json_header();

        $imageDir = '';

        if (isset($_FILES["file1"]) && $_FILES["file1"]["name"][0] != '') {

            $lnkDir = "/cdn/categories/";
            $filesDir = $_SERVER['DOCUMENT_ROOT'] . "/travelite" . $lnkDir;   //"C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";


            if (!file_exists($filesDir)) {
                mkdir($filesDir, 0777, true);
            }


            $finalDir = $filesDir;


            $i = 0;
            foreach ($_FILES["file1"]['tmp_name'] as $key => $val) {

                if (resize_image($val, 1599, 640, $finalDir, $_FILES["file1"]['name'][$key], false)) {

                } else {
                    echo json_encode(array('Code' => 1, 'Messsage' => 'File Upload Error'));
                    exit();
                }

                $i++;
            }

            $imageDir = $lnkDir . $_FILES["file1"]['name'][0];

        }


        $CategoryId = $this->input->post('categoryId', true);

        if ($CategoryId) {

            $incomeData = $this->input->post(null, true);
            $subCategoryName = $incomeData['categoryNames']['1']['name'];


            $setResult = $this->categoriessvc_model->SetCategory($subCategoryName, 0, $imageDir, $CategoryId);

            foreach ($incomeData['categoryNames'] as $key => $val) {
                $this->categoriessvc_model->SetCategoryTranslation($setResult['categoryId'], $val['name'], $val['description'], $key);
            }
        }

        echo json_encode(array('resultId' => $setResult));
    }

    public function AjaxAddSubCategory()
    {
        json_header();
        $incomeData = $this->input->post(null, true);

        $subCategoryName = $incomeData['categoryNames']['1']['name'];

        $CategoryId = $this->input->post('categoryId', true);
        $setResult = $this->categoriessvc_model->SetCategory($subCategoryName, $CategoryId, '', 0);

        foreach ($incomeData['categoryNames'] as $key => $val) {
            $this->categoriessvc_model->SetCategoryTranslation($setResult['categoryId'], $val['name'], $val['description'], $key);
        }


        echo json_encode(array('resultId' => $setResult));
    }

    public function AjaxDeleteCategory()
    {
        json_header();
        $CategoryId = $this->input->post('categoryId', true);
        $delResult = $this->categoriessvc_model->DeleteCategory($CategoryId);
        $retMessages = array('Message' => "Incorrect Parameters");
        if (!empty($delResult) && array_key_exists("deleteResult", $delResult)) {

            if ($delResult['deleteResult'] == -1) {
                $retMessages['Message'] = "Cant delete, there are some products or subcategories binded on it";
            } elseif ($delResult['deleteResult'] == 1) {
                $retMessages['Message'] = "success";
            } else {
                $retMessages['Message'] = "Some Error Please try again later";
            }
        }

        echo json_encode($retMessages);
    }


    public function ajaxaddcategory()
    {

//        pre_print_r($_POST);
//        pre_print_r($_FILES);


        if (isset($_FILES["file1"]) && $_FILES["file1"]["name"][0] != '') {
            // $productId = $_POST['productId'];
            $fileName = $_FILES["file1"]["name"][0]; // The file name
            $fileTmpLoc = $_FILES["file1"]["tmp_name"][0]; // File in the PHP tmp folder
            $fileType = $_FILES["file1"]["type"][0]; // The type of file it is
            $fileSize = $_FILES["file1"]["size"][0]; // File size in bytes
            $fileErrorMsg = $_FILES["file1"]["error"][0]; // 0 for false... and 1 for true

//            $filesDir     = "C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";
//            $vinDir       = $_POST['vinnumber']."\\";

            $lnkDir = "/cdn/categories/";
            $filesDir = $_SERVER['DOCUMENT_ROOT'] . "/travelite" . $lnkDir;   //"C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";

            $thumb = 'thumbs/';

            if (!file_exists($filesDir)) {
                mkdir($filesDir, 0777, true);
            }


            $finalDir = $filesDir;
            // $finalThumbDir = $filesDir.$thumb;


            $i = 0;
            foreach ($_FILES["file1"]['tmp_name'] as $key => $val) {

                if (resize_image($val, 1599, 640, $finalDir, $_FILES["file1"]['name'][$key], false)) {

                } else {
                    echo json_encode(array('Code' => 1, 'Messsage' => 'File Upload Error'));
                    exit();
                }

                $i++;
            }


            //set category

            //description
//            $categoryNameEN = $this->input->post('categoryName[1]', true);
//            $categoryNameDE = $this->input->post('categoryName[2]', true);
//            $categoryNameRU = $this->input->post('categoryName[3]', true);


            $incomeData = $this->input->post(null, true);


            //Set Category Record
            $categoryId = $this->_InsertCategory($incomeData['categoryNames'][1]['name'], $lnkDir . $_FILES["file1"]['name'][0]);


            if ($categoryId) {

                //set category tranlations


                foreach ($incomeData['categoryNames'] as $key => $val) {
                    $this->categoriessvc_model->SetCategoryTranslation($categoryId['categoryId'], $val['name'], $val['description'], $key);
                }


                echo json_encode(array('Code' => 0, 'Messsage' => 'Success'));
            } else {
                echo json_encode(array('Code' => 2, 'Messsage' => 'Error To Add category'));
                exit();
            }


        }


    }


    protected function _InsertCategory($categoryName = '', $link = '')
    {

        if ($categoryName != '' && $link != '') {
            return $this->categoriessvc_model->SetCategory($categoryName, 0, $link, 0);
        }
        return 0;

    }

}