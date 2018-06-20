<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Cargo los helpers que vaya a usar (CodeIgniter los busca en \application\helpers y en \system\helpers)
        $this->load->helper('nuevoHelper_helper');  // Ruta del helper: \application\helpers\nuevoHelper_helper.php

    }

    public function index()
    {
        $datos['bodyContent'] = 'pruebas/pruebasView';  // Ruta de la vista: \application\views\pruebas\pruebasView.php
        
        // Cargo las librerías que vaya a usar (CodeIgniter las busca en \application\libraries y en \system\libraries)
        $this->load->library('NuevaLibreria', array('a', 'b'));  // Ruta de la librería: \application\libraries\NuevaLibreria.php
        // Nota: los parámetros que acompañen al nombre de la librería los recibirá el constructor de esa librería

        var_dump($this->nuevaLibreria);

        // Cuidado: hay que pasarle los métodos a la vista (preferiblemente, usando la variable $datos en index()).
        $datos['crearListaULFuncion'] = $this->nuevaLibreria->crearListaUL();

		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
    }

}
