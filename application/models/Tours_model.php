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

            $queryBundles = "CALL GetTourBundles(".lang_id().", ".$val['Id'].");";

            $resultBundles = $this->db->query($queryBundles);
            $bundlesResult = $resultBundles->result_array();
            $tours[$key] = array('details'=>$val, 'bundles'=>$bundlesResult);
            $result->next_result();

        }

        return $tours;

    }

}