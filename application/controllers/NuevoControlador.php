<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevoControlador extends CI_Controller {

    public function index()
    {
        $datos['bodyContent'] = 'nuevoControlador/nuevoControladorView';  // Ruta de la vista: \application\views\nuevoControlador\nuevoControladorView.php
		
		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
    }

}
