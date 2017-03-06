<?php
class Categoriesmanager extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(simple_check_login($this->router->class) === false){
            redirect(login_url(), 'location');
        }
        $this->td['content'] = "categories/index";
        $this->load->model("services/categoriessvc_model");
    }


    public function index(){

        $this->td['categoriesList'] = $this->categoriessvc_model->GetCategoriesList();

        $this->load->view('main_tpl', $this->td);
    }



    public function AjaxSetSubCategory(){
        json_header();
        $subCategoryName = $this->input->post('categoryName', true);
        $CategoryId = $this->input->post('categoryId', true);
        $setResult = $this->categoriessvc_model->SetCategory($subCategoryName, 0, '', $CategoryId);
        echo json_encode(array('resultId'=>$setResult));
    }

    public function AjaxAddSubCategory(){
        json_header();
        $subCategoryName = $this->input->post('categoryName', true);
        $CategoryId = $this->input->post('categoryId', true);
        $setResult = $this->categoriessvc_model->SetCategory($subCategoryName, $CategoryId, '', 0);
        echo json_encode(array('resultId'=>$setResult));
    }

    public function AjaxDeleteCategory(){
        json_header();
        $CategoryId = $this->input->post('categoryId', true);
        $delResult = $this->categoriessvc_model->DeleteCategory($CategoryId);
        $retMessages = array('Message'=>"Incorrect Parameters");
        if(!empty($delResult) && array_key_exists("deleteResult", $delResult)){

            if($delResult['deleteResult'] == -1){
                $retMessages['Message'] = "Cant delete, there are some products or subcategories binded on it";
            }elseif($delResult['deleteResult'] == 1){
                $retMessages['Message'] = "success";
            }else{
                $retMessages['Message'] = "Some Error Please try again later";
            }
        }

        echo json_encode($retMessages);
    }


    public function ajaxaddcategory(){

//        pre_print_r($_POST);
//        pre_print_r($_FILES);

$categoryName = $this->input->post('categoryName', true);







        if(isset($_FILES["file1"])){
           // $productId = $_POST['productId'];
            $fileName     = $_FILES["file1"]["name"][0]; // The file name
            $fileTmpLoc   = $_FILES["file1"]["tmp_name"][0]; // File in the PHP tmp folder
            $fileType     = $_FILES["file1"]["type"][0]; // The type of file it is
            $fileSize     = $_FILES["file1"]["size"][0]; // File size in bytes
            $fileErrorMsg = $_FILES["file1"]["error"][0]; // 0 for false... and 1 for true

//            $filesDir     = "C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";
//            $vinDir       = $_POST['vinnumber']."\\";

            $lnkDir = "/productimages/categories/";
            $filesDir     = $_SERVER['DOCUMENT_ROOT'].$lnkDir;   //"C:\\inetpub\\wwwroot\\cdn.barami.us\\vinimages\\ufwp\\";

            $thumb    = 'thumbs/';

            if (!file_exists($filesDir)) {
                mkdir($filesDir, 0777, true);
              //  mkdir($filesDir.$thumb, 0777, true);
            }


            $finalDir = $filesDir;
           // $finalThumbDir = $filesDir.$thumb;


            $i = 0;
            foreach($_FILES["file1"]['tmp_name'] as $key=>$val){

                if(resize_image($val, 700, 569, $finalDir, $_FILES["file1"]['name'][$key], false)){

                    if($this->_InsertCategory($categoryName , $lnkDir.$_FILES["file1"]['name'][$key])){
                        echo json_encode(array('Code'=>0, 'Messsage'=>'Success'));
                    }else{
                        echo json_encode(array('Code'=>2, 'Messsage'=>'Error To Add category')); exit();
                    }
                }else{
                    echo json_encode(array('Code'=>1, 'Messsage'=>'File Upload Error')); exit();
                }

//                if (!$val) { // if file not chosen
//                    echo json_encode(array('Code'=>1, 'Messsage'=>'File Upload Error')); exit();
//                }
              /*  if(move_uploaded_file($val, $finalDir.$_FILES["file1"]['name'][$key])){
                    chmod($finalDir.$_FILES["file1"]['name'][$key], 0777);

                    $lnk = $finalDir.$_FILES["file1"]['name'][$key];
                    $primary = 0;

                    if($i = 0){
                        $primary = 1;
                    }

                    $this->_insertPicToDatabase($productId, $lnkDir.$_FILES["file1"]['name'][$key], $lnkDir.$thumb.$_FILES["file1"]['name'][$key], $primary);

                    echo $_FILES["file1"]['name'][$key]." upload is complete<br>";
                } else {
                    echo "move_uploaded_file function failed";
                }*/

                $i++;
            }

        }













    }


    protected function _InsertCategory($categoryName = '' , $link = ''){

        if($categoryName != '' && $link != ''){
            return $this->categoriessvc_model->SetCategory($categoryName, 0, $link, 0);
        }
            return 0;

    }

}