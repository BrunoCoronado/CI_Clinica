<?php
class Paciente extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('paciente_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['pacientes'] = $this->paciente_model->obtenerPacientes();
        
        $this->load->view('paciente_view', $data);
    }

    public function view(){
        $data['pacientes'] = $this->paciente_model->obtenerPacientes();
        
        $this->load->view('paciente_view', $data);
    }
}