<?php
class Paciente extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('paciente_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['pacientes'] = $this->paciente_model->obtenerPacientes();

        $this->load->view('templates/header', $data);
        $this->load->view('paciente_view', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function crear(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('dpi', 'DPI', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('crear_paciente_view');
            $this->load->view('templates/footer');          
        }else{
            $this->paciente_model->nuevoPaciente();
            $codigo = $this->paciente_model->obtenerCodigoUltimoPaciente()[0]['codigoPaciente'];
            redirect('/alergia/administrarAlergias/'.$codigo);
        }
    }

    public function ver($codigo){
        $data['paciente'] = $this->paciente_model->obtenerPaciente($codigo)[0];

        $this->load->view('templates/header', $data);
        $this->load->view('ver_paciente_view', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function cargar($codigo){
        $data['paciente'] = $this->paciente_model->obtenerPaciente($codigo)[0];
        $data['codigo'] = $codigo;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header', $data);
        $this->load->view('modificar_paciente_view', $data);
        $this->load->view('templates/footer', $data);          
    }

    public function modificar($codigo){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Title', 'required');
        $this->form_validation->set_rules('dpi', 'DPI', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('modificar_paciente_view');
            $this->load->view('templates/footer');          
        }else{
            $this->paciente_model->modificarPaciente($codigo);
            $this->index();
        }
    }

    public function eliminar($codigo){
        $this->paciente_model->eliminarPaciente($codigo);
        $this->index();
    }

    public function crearAlergias(){
        $this->load->view('templates/header');
        $this->load->view('crear_alergias_paciente');
        $this->load->view('templates/footer');          
    }
}