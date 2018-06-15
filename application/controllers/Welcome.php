<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datos['bodyContent'] = 'welcome/welcomeView';  // Ruta de la vista: \application\views\welcome\welcomeView.php

		$datos['mensajeHolaMundo'] = 'Hola Mundo!';
		
		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
	}

}
