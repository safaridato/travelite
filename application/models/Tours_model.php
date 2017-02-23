<?php

class Tours_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function GetToursList()
    {

        $toursList = array();

        $query = "CALL GetTours(".lang_id().");";

        $result = $this->db->query($query);
        $toursResult = $result->result_array();
        $tours = $toursResult;
        $result->next_result();

        foreach($tours as $key=>$val){

            $queryBundles = "CALL GetTourBundles(".$val['Id'].",".lang_id().");";

            $resultBundles = $this->db->query($queryBundles);
            $bundlesResult = $resultBundles->result_array();
            $tours[$key] = array('details'=>$val, 'bundles'=>$bundlesResult);
            $result->next_result();

        }

        return $tours;

    }




    public function GetTourDetails($id)
    {

        $tourDetails = array();

        $query = "CALL GetTourDetails(".lang_id().", ".$id.");";
        $result = $this->db->query($query);
        $tourResult = $result->result_array();
        $result->next_result();

        if(!empty($tourResult)){

            //pics
            $queryPics = "CALL GetTourPics(".$id.");";
            $resultPics = $this->db->query($queryPics);
            $picsResult = $resultPics->result_array();
            $resultPics->next_result();


            //bundles
            $queryBundles = "CALL GetTourBundles(".$id.", ".lang_id().");";
            $resultBundles = $this->db->query($queryBundles);
            $bundlesResult = $resultBundles->result_array();
            $resultBundles->next_result();


            //services
            $queryService = "CALL GetTourServices(".$id.",".lang_id().");";
            $resultService = $this->db->query($queryService);
            $serviceResult = $resultService->result_array();
            $resultService->next_result();



            $tourDetails = array('Details'=>$tourResult[0], 'Pics'=>$picsResult, 'Bundles'=>$bundlesResult, 'Services'=>$serviceResult);
        }



        return $tourDetails;

    }

}