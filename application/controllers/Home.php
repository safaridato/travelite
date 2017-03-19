<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        
        $td = array();

        $this->load->model("template_model");

       // $td["discountedTours"] = $this->tours_model->GetDiscountedTours();
        $homeDate = $this->template_model->GetHomeData();
        $td["discountedTours"] = $homeDate['offers'];
        $td["slides"] = $homeDate['slides'];

        $td["content"] = cvf(); //"index"; //home/index
        $this->load->view('shared/_layout', $td);
    }
}
