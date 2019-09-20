<?php
class Referencia extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('referencia_model');
        $this->load->helper('url_helper');
    }

    public function administrarReferencias($codigo){
        $data['referencias'] = $this->referencia_model->obtenerReferencias($codigo);
        $data['codigoPaciente'] = $codigo;

        $this->load->view('templates/header', $data);
        $this->load->view('administrar_referencias', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function crear($codigo){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['codigoPaciente'] = $codigo;

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('parentezco', 'Parentezco', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('crear_referencia', $data);
            $this->load->view('templates/footer');          
        }else{
            $codigo = $this->referencia_model->nuevaReferencia();
            redirect('/referencias/administrarReferencias/'.$codigo);
        }
    }

    public function cargar($codigo){
        $data['referencia'] = $this->referencia_model->obtenerReferencia($codigo)[0];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('modificar_referencia', $data);
        $this->load->view('templates/footer');          
    }

    public function modificar($codigoReferencia, $codigoPaciente){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('parentezco', 'Parentezco', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required');
        
        if($this->form_validation->run() === FALSE){
            redirect('/referencias/administrarReferencias/modificar/'.$codigoReferencia);
        }else{
            $this->referencia_model->modificarReferencia($codigoReferencia);
            redirect('/referencia/administrarReferencias/'.$codigoPaciente);
        }
    }

    public function eliminar($codigo, $codigoPaciente){
        $this->referencia_model->eliminarReferencia($codigo);
        redirect('/referencia/administrarReferencias/'.$codigoPaciente);
    } 
}
