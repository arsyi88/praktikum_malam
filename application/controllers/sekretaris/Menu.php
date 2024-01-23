<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("product_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'content' => "sekretaris/dashboard/index"
        );
        $this->load->view('sekretaris/template/main',$data);
    }
}