<?php
class Alergia extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('alergia_model');
        $this->load->helper('url_helper');
    }

    public function administrarAlergias($codigo){
        $data['alergias'] = $this->alergia_model->obtenerAlergias($codigo);
        $data['codigoPaciente'] = $codigo;

        $this->load->view('templates/header', $data);
        $this->load->view('crear_alergias_paciente', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function crear($codigo){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['codigoPaciente'] = $codigo;

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('crear_alergia', $data);
            $this->load->view('templates/footer');          
        }else{
            $codigo = $this->alergia_model->nuevaAlergia();
            redirect('/alergia/administrarAlergias/'.$codigo);
        }
    }

    public function cargar($codigo){
        $data['alergia'] = $this->alergia_model->obtenerAlergia($codigo)[0];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('modificar_alergia', $data);
        $this->load->view('templates/footer');          
    }

    public function modificar($codigoAlergia, $codigoPaciente){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        
        if($this->form_validation->run() === FALSE){
            redirect('/alergia/administrarAlergias/modificar/'.$codigoAlergia);
        }else{
            $this->alergia_model->modificarAlergia($codigoAlergia);
            redirect('/alergia/administrarAlergias/'.$codigoPaciente);
        }
    }

    public function eliminar($codigo, $codigoPaciente){
        $this->alergia_model->eliminarAlergia($codigo);
        redirect('/alergia/administrarAlergias/'.$codigoPaciente);
    } 
}
