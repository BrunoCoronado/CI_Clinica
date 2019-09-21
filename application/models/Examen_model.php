<?php
class Examen_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerExamenes($codigoVisita){
        $query = $this->db->query('SELECT * FROM examen WHERE estado = 0 AND codigoVisita = '.$codigoVisita);
        return $query->result_array();
    }

    public function obtenerExamen($codigoExamen){
        $query = $this->db->query('SELECT * FROM examen WHERE estado = 0 AND codigoExamen = '.$codigoExamen);
        return $query->result_array();
    }

    public function nuevoExamen(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'detalle' => $this->input->post('detalle'),
            'codigoVisita' => $this->input->post('codigoVisita'),
            'estado' => '0'
        );
        $this->db->insert('examen', $data);
        return $this->input->post('codigoVisita');
    }

    public function modificarExamen($codigoExamen){
        $data = array(
            'codigoExamen' => $codigoExamen,
            'nombre' => $this->input->post('nombre'),
            'detalle' => $this->input->post('detalle'),
            'codigoVisita' => $this->input->post('codigoVisita'),
            'estado' => '0'
        );
        return $this->db->replace('examen', $data);
    }

    public function eliminarExamen($codigoExamen){
        $examen = $this->obtenerExamen($codigoExamen)[0];
        $data = array(
            'codigoExamen' => $codigoExamen,
            'nombre' => $examen['nombre'],
            'detalle' => $examen['detalle'],
            'codigoVisita' => $examen['codigoVisita'],
            'estado' => '1'
        );
        return $this->db->replace('examen', $data);
    }
}