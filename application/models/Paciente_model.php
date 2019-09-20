<?php
class Paciente_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerPacientes(){
        $query = $this->db->get('paciente');
        return $query->result_array();
    }

    public function nuevoPaciente(){

    }

    public function editarPaciente(){

    }

    public function eliminarPaciente(){

    }
}