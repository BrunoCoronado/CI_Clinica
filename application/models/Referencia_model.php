<?php
class Referencia_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function obtenerReferencias($codigoPaciente){
        $query = $this->db->query('SELECT * FROM referencia WHERE estado = 0 AND codigoPaciente = '.$codigoPaciente);
        return $query->result_array();
    }

    public function obtenerReferencia($codigo){
        $query = $this->db->query('SELECT * FROM referencia WHERE estado = 0 AND codigoReferencia = '.$codigo);
        return $query->result_array();
    }

    public function nuevaReferencia(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'parentezco' => $this->input->post('parentezco'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        $this->db->insert('referencia', $data);
        return $this->input->post('codigoPaciente');
    }

    public function modificarReferencia($codigo){
        $data = array(
            'codigoReferencia' => $codigo,
            'nombre' => $this->input->post('nombre'),
            'parentezco' => $this->input->post('parentezco'),
            'telefono' => $this->input->post('telefono'),
            'correo' => $this->input->post('correo'),
            'codigoPaciente' => $this->input->post('codigoPaciente'),
            'estado' => '0'
        );
        return $this->db->replace('referencia', $data);
    }

    public function eliminarReferencia($codigo){
        $referencia = $this->obtenerReferencia($codigo)[0];
        $data = array(
            'codigoReferencia' => $codigo,
            'nombre' => $referencia['nombre'],
            'parentezco' => $referencia['parentezco'],
            'telefono' => $referencia['telefono'],
            'correo' => $referencia['correo'],
            'codigoPaciente' => $referencia['codigoPaciente'],
            'estado' => '1'
        );
        return $this->db->replace('referencia', $data);
    }
}