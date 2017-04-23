<?php
class Tourssvc_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function GetSubCategoriesList($categoryId = 0, $tourId = 0)
    {
        $query = "call GetSubCategories('" . $categoryId . "', " . $tourId . ");";
        $categoriesResult = $this->db->query($query);
        return $categoriesResult->result_array();

    }


    public function ChangeTourStatusById($tourId = 0, $status = 0)
    {
        $query = "call DisableTour('" . $tourId . "','" . $status . "');";
        $this->db->query($query);
        return true;

    }

}