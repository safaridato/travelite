<?php

class Template_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }


    public function GetHomeData()
    {


        $homeData = array();

        $queryDiscount = "CALL GetDiscountedTours(" . lang_id() . ");";

        $result = $this->db->query($queryDiscount);
        $dToursResult = $result->result_array();
        $dTours = $dToursResult;
        $result->next_result();


        $querySlides = "CALL GetSlides(" . lang_id() . ");";

        $sResult = $this->db->query($querySlides);
        $sToursResult = $sResult->result_array();
        $sTours = $sToursResult;
        $sResult->next_result();


        $homeData = array('slides' => $sTours, 'offers' => $dTours);


        return $homeData;


    }


    public function GetTags()
    {

        $queryTags = "CALL GetTags();";

        $qResult = $this->db->query($queryTags);
        $qTagsResult = $qResult->result_array();
        $tags = $qTagsResult;
        $qResult->next_result();

        return $tags;

    }

}