<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabla1Model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function insertarRegistros($datos) {
        /* INSERT con CodeIgniter:
                $this->db->insert('tabla', array('campo1' => 'valorCampo1',
                                                 'campo2' => 'valorCampo2'));
        */

        $resultado = $this->db->insert('tabla1', array('columna1' => $datos['campo1']));

        return $resultado;
    }

    public function getRegistros() {
        /* SELECT con CodeIgniter:
                $this->db->get('tabla');
        */

        $resultado = $this->db->get('tabla1');

        return $resultado;
    }

    public function getRegistroByID($id) {
        /* SELECT con CodeIgniter:
                $this->db->get('tabla');
        */

        $this->db->get('tabla1');
        $resultado = $this->db->where('id', $id);

        return $resultado;
    }

}