<?php
class Paciente_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerPacientes(){
        $query = $this->db->query('SELECT * FROM paciente WHERE estado = 0');
        return $query->result_array();
    }

    public function obtenerPaciente($codigo){
        $query = $this->db->query('SELECT * FROM paciente WHERE estado = 0 AND codigoPaciente = '.$codigo);
        return $query->result_array();
    }

    public function obtenerCodigoUltimoPaciente(){
        $this->db->select_max('codigoPaciente');
        $query = $this->db->get('paciente');
        return $query->result_array();
    }

    public function nuevoPaciente(){
        $data = array(
            'dpi' => $this->input->post('dpi'),
            'nombre' => $this->input->post('nombre'),
            'sexo' => 'M',
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'estado' => '0'
        );
        return $this->db->insert('paciente', $data);
    }

    public function modificarPaciente($codigo){
        $data = array(
            'codigoPaciente' => $codigo,
            'dpi' => $this->input->post('dpi'),
            'nombre' => $this->input->post('nombre'),
            'sexo' => 'M',
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'estado' => '0'
        );
        return $this->db->replace('paciente', $data);
    }

    public function eliminarPaciente($codigo){
        $paciente = $this->obtenerPaciente($codigo)[0];
        $data = array(
            'codigoPaciente' => $codigo,
            'dpi' => $paciente['dpi'],
            'nombre' => $paciente['nombre'],
            'sexo' => 'M',
            'telefono' => $paciente['telefono'],
            'correo' => $paciente['correo'],
            'estado' => '1'
        );
        return $this->db->replace('paciente', $data);
    }
}