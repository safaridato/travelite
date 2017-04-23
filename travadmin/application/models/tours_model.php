<?php

class Tours_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public
    function GetToursMainCategories()
    {

        $query = "CALL GetCategories(1, null);";

        $result = $this->db->query($query);
        $categoriesResult = $result->result_array();
        $categories = $categoriesResult;
        $result->next_result();


        return $categories;

    }

    public
    function GetToursSubCategories($categoryId)
    {

        $query = "CALL GetCategories(1, " . $categoryId . ");";

        $result = $this->db->query($query);
        $categoriesResult = $result->result_array();
        $categories = $categoriesResult;
        $result->next_result();


        return $categories;

    }


    public function SetTour($params = array())
    {
        $tourId = 0;
        if (isset($params['tourId']) && $params['tourId'] > 0) {
            $tourId = $params['tourId'];
        }


        $query = "call InsertTour('" . $params['tourName'] . "' ,'" . $params['thumb'] . "', @tourId);";

        $this->db->trans_start();
        $result = $this->db->query("SET @tourId = " . $tourId . ";");
        $this->db->query($query);
        $result = $this->db->query("select @tourId as TourId;");
        $this->db->trans_complete();
        $tourResult = $result->result_array();

        if (!empty($tourResult) && isset($tourResult[0]) && $tourResult[0]['TourId'] > 0) {


            $tourId = $tourResult[0]['TourId'];


            foreach ($params['names'] as $key => $val) {
                $namesQuery = "call SetTourDetails (" . $tourId . ", '" . $val['tourdescription'] . "','" . $val['fulldescription'] . "', " . $key . ", '" . $val['tourName'] . "')";
                $this->db->query($namesQuery);
            }


            $priceQuery = "call SetTourPrice ('" . $params['tourPrice'] . "' , 1, 1, '" . $params['tourDiscountType'] . "', '" . $params['tourDiscount'] . "', " . $tourId . " )";
            $this->db->query($priceQuery);


        }

        return $tourId;
    }


    public function SetCategories($tourId = 0, $subCategoriesList = array(), $mainCategory = 0)
    {

        if ($tourId > 0 && $mainCategory > 0) {

            $insertStr = "INSERT INTO tour_categories_binding
                            (CategoryId,
                             TourId)
                          VALUES ";
            $valuesStr = "";

            //set main category value
            $valuesStr .= "(" . $mainCategory . ", " . $tourId . "),";

            if (!empty($subCategoriesList)) {
                foreach ($subCategoriesList as $key => $val) {
                    $valuesStr .= "(" . $key . ", " . $tourId . "),";
                }
            }

            $query = $insertStr . substr($valuesStr, 0, strlen($valuesStr) - 1) . ";";

            $this->db->query($query);

        }

    }


    public function SetThumb($tourId, $thumb)
    {
        $query = "CALL SetThumb(" . $tourId . ", '" . $thumb . "');";
        $this->db->query($query);
        return true;
    }

    public function DeleteTourCategories($tourId)
    {
        $query = "CALL DeleteCategoryBindings(" . $tourId . ");";
        $this->db->query($query);
        return true;
    }


    public function GetTourDetails($tourId)
    {
        $tourDetails = array();

        $query = "CALL GetTourDetailsAdmin(" . $tourId . ");";

        $result = $this->db->query($query);
        $tourResult = $result->result_array();
        $tourDetails = $tourResult;
        $result->next_result();


        if (!empty($tourDetails)) {
            $tourDetails['tour'] = $tourDetails[0];

            $queryDescr = "CALL GetTourDescriptions(" . $tourId . ");";

            $resultDesc = $this->db->query($queryDescr);
            $tourDescResult = $resultDesc->result_array();
            $tourDesc = $tourDescResult;
            $resultDesc->next_result();
            $tourDetails['descriptions'] = $tourDesc;


            $queryPrice = "CALL GetTourPrice(" . $tourId . ", 1);";

            $resultPrice = $this->db->query($queryPrice);
            $tourPriceResult = $resultPrice->result_array();
            $tourPrice = $tourPriceResult[0];
            $resultPrice->next_result();
            $tourDetails['price'] = $tourPrice;

        }

        return $tourDetails;

    }


    public function GetToursList()
    {

        $toursList = array();
        $query = "CALL GetToursAdmin(1);";

        $result = $this->db->query($query);
        $tourResult = $result->result_array();
        $toursList = $tourResult;
        $result->next_result();

        return $toursList;

    }

}