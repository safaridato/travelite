<?php

class Metamanager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("services/metassvc_model");
    }

    public function index()
    {
        $this->td['content'] = "Metas/index";
        $metas = $this->metassvc_model->GetMetaLinks();
        $this->td['metas'] = $metas;
        $this->load->view('main_tpl', $this->td);
    }

    public function edit($linkId = '')
    {
        $this->td['content'] = "Metas/edit";
        $titles = $this->metassvc_model->GetPageTitles($linkId);

        $titleEn = '';
        $titleKa = '';
        $titleRu = '';

        if (array_key_exists('1', $titles)) {
            $titleEn = $titles['1']['PageTitle'];
        }
        if (array_key_exists('2', $titles)) {
            $titleKa = $titles['2']['PageTitle'];
        }
        $this->metassvc_model->GetPageTitles($linkId);
        if (array_key_exists('3', $titles)) {
            $titleRu = $titles['3']['PageTitle'];
        }


        $this->td['titleEn'] = $titleEn;
        $this->td['titleKa'] = $titleKa;
        $this->td['titleRu'] = $titleRu;

        $lnkAddress = $this->metassvc_model->GetLinkAddressByID($linkId);
        $this->td['linkAddress'] = $lnkAddress;


        $metaProps = $this->metassvc_model->GetMetProperties();
        $this->td['metaProperties'] = $metaProps;


        $this->td['linkId'] = $linkId;
        $this->load->view('main_tpl', $this->td);
    }


    public function AjaxSetTitles()
    {

        $linkId = $this->input->post('linkId', true);

        $titles = $this->input->post('titles', true);

        if ($linkId > 0) {

            foreach ($titles as $key => $val) {
                $this->metassvc_model->SetPageTitle($linkId, $val['name'], $val['value']);
            }
        }

    }

    public function AjaxAddMetaTag()
    {

        $linkId = $this->input->post('linkId', true);
        $propId = $this->input->post('propId', true);
        $propValue = $this->input->post('propValue', true);

        $metas = $this->input->post('metas', true);

        pre_print_r($metas);

        if ($linkId > 0) {
            $metaInsertId = $this->metassvc_model->SetMeta($linkId, $propId, $propValue);
            if ($metaInsertId > 0) {
                foreach ($metas as $key => $val) {
                    $this->metassvc_model->SetMetaContent($metaInsertId, $key, $val);
                }
            }
        }
    }

    public function AjaxLoadMetaTagsByLinkId()
    {
        json_header();
        $linkId = $this->input->post('linkId', true);
        $metasLinks =  $this->metassvc_model->LoadMetaLinksList($linkId);


        foreach ($metasLinks as $key=>$val) {
             $metaContents = $this->metassvc_model->LoadMetaLinksContents($val['ID']);
            $metContArray = array();
            foreach($metaContents as $mKey=>$mVal){
                $metContArray[$mVal['LangId']] = $mVal;
            }

            $metasLinks[$key]['Content'] = $metContArray;

        }


        echo json_encode($metasLinks);
    }

    public function AjaxRemoveMeta(){
        $metaId = $this->input->post('metaId', true);


        if($metaId > 0){
            $this->metassvc_model->RemoveMetas($metaId);
        }

    }

}