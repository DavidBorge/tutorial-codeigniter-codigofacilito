<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Cargo los helpes que vaya a usar (CodeIgniter los busca en \application\helpers y en \system\helpers)
        $this->load->helper("nuevoHelper_helper");  // Ruta del helper: \application\helpers\nuevoHelper_helper.php
    }

    public function index()
    {
        $datos['bodyContent'] = 'pruebas/pruebasView';  // Ruta de la vista: \application\views\pruebas\pruebasView.php
		
		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
    }

}
