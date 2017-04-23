<?php

class Tours_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }


    public
    function GetToursCategoriesList()
    {

        $query = "CALL GetCategories(" . lang_id() . ", null);";

        $result = $this->db->query($query);
        $categoriesResult = $result->result_array();
        $categories = $categoriesResult;
        $result->next_result();


        foreach ($categories as $key => $val) {

            $queryBundles = "CALL GetCategories(" . lang_id() . "," . $val['Id'] . ");";

            $resultSubCategories = $this->db->query($queryBundles);
            $subCatsResult = $resultSubCategories->result_array();
            $categories[$key] = array('cats' => $val, 'subs' => $subCatsResult);
            $result->next_result();

        }
        return $categories;

    }


    public
    function GetTourCategoryDetails($catId)
    {
        $categoryResult = array();
        $query = "CALL GetTourCategoryDetails(" . lang_id() . ", " . $catId . ");";

        $result = $this->db->query($query);
        $categoryResult = $result->result_array();
        $result->next_result();
        if (!empty($categoryResult)) {
            return $categoryResult[0];
        }

        return $categoryResult;
    }

    public function GetDiscountedTours()
    {
        $query = "CALL GetDiscountedTours(" . lang_id() . ");";

        $result = $this->db->query($query);
        $dToursResult = $result->result_array();
        $dTours = $dToursResult;
        $result->next_result();

        return $dTours;
    }

    public
    function GetToursList($categoryId = 0)
    {

        $toursList = array();

        $query = "CALL GetTours(" . lang_id() . ", ".$categoryId.");";

        $result = $this->db->query($query);
        $toursResult = $result->result_array();
        $tours = $toursResult;
        $result->next_result();

        foreach ($tours as $key => $val) {

            $queryBundles = "CALL GetTourBundles(" . $val['Id'] . "," . lang_id() . ");";

            $resultBundles = $this->db->query($queryBundles);
            $bundlesResult = $resultBundles->result_array();
            $tours[$key] = array('details' => $val, 'bundles' => $bundlesResult);
            $result->next_result();

        }

        return $tours;

    }


    public
    function GetTourDetails($id)
    {

        $tourDetails = array();

        $query = "CALL GetTourDetails(" . lang_id() . ", " . $id . ");";
        $result = $this->db->query($query);
        $tourResult = $result->result_array();
        $result->next_result();

        if (!empty($tourResult)) {

            //pics
            $queryPics = "CALL GetTourPics(" . $id . ");";
            $resultPics = $this->db->query($queryPics);
            $picsResult = $resultPics->result_array();
            $resultPics->next_result();


            //bundles
            $queryBundles = "CALL GetTourBundles(" . $id . ", " . lang_id() . ");";
            $resultBundles = $this->db->query($queryBundles);
            $bundlesResult = $resultBundles->result_array();
            $resultBundles->next_result();


            //services
            $queryService = "CALL GetTourServices(" . $id . "," . lang_id() . ");";
            $resultService = $this->db->query($queryService);
            $serviceResult = $resultService->result_array();
            $resultService->next_result();


            //day packages
            $queryDays = "CALL GetTourDays(" . $id . "," . lang_id() . ");";
            $resultDays = $this->db->query($queryDays);
            $daysResult = $resultDays->result_array();
            $resultDays->next_result();


            //$tourResult[0]["FullReview"] = htmlspecialchars_decode($tourResult[0]["FullReview"]);
            $tourDetails = array('Details' => $tourResult[0], 'Pics' => $picsResult, 'Bundles' => $bundlesResult, 'Services' => $serviceResult, 'Days' => $daysResult);
        }


        return $tourDetails;

    }

}