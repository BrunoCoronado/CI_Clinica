<?php
class Menu extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('home_view');
        $this->load->view('templates/footer');          
    }
}