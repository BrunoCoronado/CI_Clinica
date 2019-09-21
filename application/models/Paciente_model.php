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
            'sexo' => $this->input->post('sexo'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'estado' => '0'
        );
        return $this->db->insert('paciente', $data);
    }

    public function modificarPaciente($codigo){
        $this->db->set('dpi', $this->input->post('dpi'), FALSE);
        $this->db->set('nombre', $this->input->post('nombre'));
        $this->db->set('sexo', $this->input->post('sexo'));
        $this->db->set('telefono', $this->input->post('telefono'), FALSE);
        $this->db->set('correo', $this->input->post('correo'));
        $this->db->set('estado', '0');
        $this->db->where('codigoPaciente', $codigo, FALSE);
        $this->db->update('paciente');
    }

    public function eliminarPaciente($codigo){
        $this->db->set('estado', '1', FALSE);
        $this->db->where('codigoPaciente', $codigo);
        $this->db->update('paciente');
    }
}