<?php
class Examen extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('examen_model');
        $this->load->helper('url_helper');
    }

    public function administrarExamenes($codigoVisita){
        $data['examenes'] = $this->examen_model->obtenerExamenes($codigoVisita);
        $data['codigoVisita'] = $codigoVisita;

        $this->load->view('templates/header');
        $this->load->view('administrar_examenes', $data);
        $this->load->view('templates/footer');          
    }

    public function crear($codigoVisita){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['codigoVisita'] = $codigoVisita;

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('detalle', 'Detalle', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('crear_examen', $data);
            $this->load->view('templates/footer');          
        }else{
            $this->examen_model->nuevoExamen();
            redirect('/examenes/administrarExamenes/'.$codigoVisita);
        }
    }

    public function cargar($codigoExamen){
        $data['examen'] = $this->examen_model->obtenerExamen($codigoExamen)[0];

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('modificar_examen', $data);
        $this->load->view('templates/footer');          
    }

    public function modificar($codigoExamen, $codigoVisita){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('detalle', 'Detalle', 'required');
        
        if($this->form_validation->run() === FALSE){
            $data['examen'] = $this->examen_model->obtenerExamen($codigoExamen)[0];

            $this->load->view('templates/header');
            $this->load->view('modificar_examen', $data);
            $this->load->view('templates/footer');          
        }else{
            $this->examen_model->modificarExamen($codigoExamen);
            redirect('/examenes/administrarExamenes/'.$codigoVisita);
        }
    }

    public function eliminar($codigoExamen, $codigoVisita){
        $this->examen_model->eliminarExamen($codigoExamen);
        redirect('/examenes/administrarExamenes/'.$codigoVisita);
    } 
}
