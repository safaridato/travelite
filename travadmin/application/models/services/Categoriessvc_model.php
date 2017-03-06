<?php
class Categoriessvc_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }



    public function GetCategoriesList(){
        $query = "call Admin_GetCategoriesList()";
        $result = $this->db->query($query);
        $returnResult = $result->result_array();
        $result->next_result();

        $fullCategoriesList = array();

        foreach ($returnResult as $key=>$val) {

            $query = "call Admin_GetSubcategories(".$val['ID'].", 0);";
            $resultSubs = $this->db->query($query);
            $returnResultSubs = $resultSubs->result_array();
            $resultSubs->next_result();

            $fullCategoriesList[$val['ID']] = array('categories'=>$val, 'subs'=>$returnResultSubs);
        }

        return $fullCategoriesList;

    }



    public function SetCategory($categoryName = '', $parentId = 0, $imgLink = '', $categoryId = 0){
        $procVarQuery = "SET @categoryId = ".$categoryId.";";
        $query = "call Admin_SetCategory('".$categoryName."', ".$parentId.", '".$imgLink."', @categoryId)";
        $this->db->trans_start();
        $this->db->query($procVarQuery);
        $this->db->query($query);
        $catResult = $this->db->query("SELECT @categoryId as categoryId;");
        $this->db->trans_complete();

        $catId = $catResult->result_array();
        if(!empty($catId) && isset($catId[0])){
            return $catId[0];
        }else{
            return 0;
        }

    }


    public function DeleteCategory($categoryId = 0){

        if($categoryId > 0){
            $query = "call Admin_DeleteCategory(".$categoryId.");";
            $result = $this->db->query($query);
            return $result->result_array()[0];
        }else{
            return array();
        }


    }



}