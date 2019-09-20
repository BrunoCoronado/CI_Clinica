<?php
class Alergia_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerAlergias($codigoPaciente){
        $query = $this->db->query('SELECT * FROM alergia WHERE estado = 0 AND codigoPaciente = '.$codigoPaciente);
        return $query->result_array();
    }

    public function obtenerAlergia($codigo){
        $query = $this->db->query('SELECT * FROM alergia WHERE estado = 0 AND codigoAlergia = '.$codigo);
        return $query->result_array();
    }

    public function nuevaAlergia(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        $this->db->insert('alergia', $data);
        return $this->input->post('codigoPaciente');
    }

    public function modificarAlergia($codigo){
        $data = array(
            'codigoAlergia' => $codigo,
            'nombre' => $this->input->post('nombre'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        return $this->db->replace('alergia', $data);
    }

    public function eliminarAlergia($codigo){
        $alergia = $this->obtenerAlergia($codigo)[0];
        $data = array(
            'codigoAlergia' => $codigo,
            'nombre' => $alergia['nombre'],
            'codigoPaciente' => $alergia['codigoPaciente'],
            'estado' => '1'
        );
        return $this->db->replace('alergia', $data);
    }
}