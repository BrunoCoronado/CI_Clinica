<?php
class Visita_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerVisitas(){
        $query = $this->db->query('SELECT * FROM visita v JOIN paciente p ON v.codigoPaciente = p.codigoPaciente WHERE v.estado = 0 AND p.estado = 0');
        return $query->result_array();
    }

    public function obtenerVisita($codigo){
        $query = $this->db->query('SELECT * FROM visita WHERE estado = 0 AND codigoVisita = '.$codigo);
        return $query->result_array();
    }

    public function obtenerCodigoUltimaVisita(){
        $this->db->select_max('codigoVisita');
        $query = $this->db->get('visita');
        return $query->result_array();
    }

    public function nuevaVisita(){
        $data = array(
            'fecha' => $this->input->post('fecha'),
            'motivo' => $this->input->post('motivo'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        $this->db->insert('visita', $data);
        return $this->input->post('codigoPaciente');
    }

    public function modificarVisita($codigo){
        $data = array(
            'codigoVisita' => $codigo,
            'fecha' => $this->input->post('fecha'),
            'motivo' => $this->input->post('motivo'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        return $this->db->replace('visita', $data);
    }

    public function eliminarVisita($codigo){
        $this->db->set('estado', '1', FALSE);
        $this->db->where('codigoVisita', $codigo);
        $this->db->update('visita');
    }
}