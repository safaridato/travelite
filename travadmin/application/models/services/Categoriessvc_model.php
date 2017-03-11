<?php

class Categoriessvc_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    public function GetCategoriesList()
    {
        $query = "call GetCategoriesListAdmin()";
        $result = $this->db->query($query);
        $returnResult = $result->result_array();
        $result->next_result();

        $fullCategoriesList = array();


        if(!empty($returnResult)){





            foreach ($returnResult as $key => $val) {

                $val['translations'] = $this->_GetCategoryTranslations($val['Id']);

                $query = "call GetSubcategoriesAdmin(" . $val['Id'] . ", 0);";
                $resultSubs = $this->db->query($query);
                $returnResultSubs = $resultSubs->result_array();
                $resultSubs->next_result();


                foreach ($returnResultSubs as $sKey=>$sVal) {

                    $returnResultSubs[$sKey]['translations'] = $this->_GetCategoryTranslations($sVal['Id']);


                }


                $fullCategoriesList[$val['Id']] = array('categories' => $val, 'subs' => $returnResultSubs);
            }
        }



        return $fullCategoriesList;

    }

    protected function _GetCategoryTranslations($categoryId = 0){
        $query = "call GetCategoryTranslations(".$categoryId.")";
        $result = $this->db->query($query);
        $returnResult = $result->result_array();
        $result->next_result();
        return $returnResult;
    }


    public function SetCategory($categoryName = '', $parentId = 0, $imgLink = '', $categoryId = 0)
    {
        $procVarQuery = "SET @categoryId = " . $categoryId . ";";
        $query = "call SetCategoryAdmin('" . $categoryName . "', " . $parentId . ", '" . $imgLink . "', @categoryId)";
        $this->db->trans_start();
        $this->db->query($procVarQuery);
        $this->db->query($query);
        $catResult = $this->db->query("SELECT @categoryId as categoryId;");
        $this->db->trans_complete();

        $catId = $catResult->result_array();
        if (!empty($catId) && isset($catId[0])) {
            return $catId[0];
        } else {
            return 0;
        }

    }

    public function SetCategoryTranslation($categoryId, $name, $desc, $langId)
    {
        $query = "call SetCategoryTranslationAdmin(" . $categoryId . ",'" . $name . "', '" . $desc . "', " . $langId . ");";
        $this->db->query($query);
        return true;
    }


    public function DeleteCategory($categoryId = 0)
    {

        if ($categoryId > 0) {
            $query = "call DeleteCategoryAdmin(" . $categoryId . ");";
            $result = $this->db->query($query);
            return $result->result_array()[0];
        } else {
            return array();
        }


    }


}