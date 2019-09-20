<?php
class Visita extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('visita_model');
        $this->load->helper('url_helper');
    }

    public function administrarVisitas(){
        $data['visitas'] = $this->visita_model->obtenerVisitas();

        $this->load->view('templates/header', $data);
        $this->load->view('administrar_visitas', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function crear(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('motivo', 'Motivo', 'required');
        $this->form_validation->set_rules('codigoPaciente', 'Paciente', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('crear_visita');
            $this->load->view('templates/footer');          
        }else{
            $this->visita_model->nuevaVisita();
            redirect('/visitas/administrarVisitas');
        }
    }

    public function cargar($codigo){
        $data['visita'] = $this->visita_model->obtenerVisita($codigo)[0];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('modificar_visita', $data);
        $this->load->view('templates/footer');          
    }

    public function modificar($codigo){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('motivo', 'Motivo', 'required');
        $this->form_validation->set_rules('codigoPaciente', 'CodigoPaciente', 'required');
        
        if($this->form_validation->run() === FALSE){
            $data['visita'] = $this->visita_model->obtenerVisita($codigo)[0];
            $this->load->view('templates/header');
            $this->load->view('modificar_visita', $data);
            $this->load->view('templates/footer');          
        }else{
            $this->visita_model->modificarVisita($codigo);
            redirect('/visitas/administrarVisitas/');
        }
    }

    public function eliminar($codigo){
        $this->visita_model->eliminarVisita($codigo);
        redirect('/visitas/administrarVisitas');
    } 
}
