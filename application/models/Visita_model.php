<?php
class Visita_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerVisitas(){
        $query = $this->db->query('SELECT * FROM visita WHERE estado = 0');
        return $query->result_array();
    }

    public function obtenerVisita($codigo){
        $query = $this->db->query('SELECT * FROM visita WHERE estado = 0 AND codigoVisita = '.$codigo);
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
        $visita = $this->obtenerVisita($codigo)[0];
        $data = array(
            'codigoVisita' => $codigo,
            'fecha' => $visita['fecha'],
            'motivo' => $visita['motivo'],
            'codigoPaciente' => $visita['codigoPaciente'],
            'estado' => '1'
        );
        return $this->db->replace('visita', $data);
    }
}