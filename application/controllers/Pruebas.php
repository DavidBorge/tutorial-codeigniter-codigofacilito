<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Cargo los helpers que vaya a usar (CodeIgniter los busca en \application\helpers y en \system\helpers)
        $this->load->helper('nuevoHelper');  // Ruta del helper: \application\helpers\nuevoHelper_helper.php
        $this->load->helper('form');  // Ruta del helper: \system\helpers\form_helper.php

        // Cargo las librerías que vaya a usar (CodeIgniter las busca en \application\libraries y en \system\libraries)
        $this->load->library('NuevaLibreria');  // Ruta de la librería: \application\libraries\NuevaLibreria.php
    }

    public function index()
    {
        $datos['bodyContent'] = 'pruebas/pruebasView';  // Ruta de la vista: \application\views\pruebas\pruebasView.php
        
        /* Formas de usar una NuevaLibreria 
            1. (Recomendado) En la vista, llamar de la forma siguiente a sus métodos (pasando parámetros si hace falta):
                NuevaLibreria::crearListaUL(array('Elemento 1', 'Elemento 2'));
            2. Creando una variable por cada método que pasamos a la vista (preferiblemente, usando la variable $datos en index()):
                $datos['crearListaULFuncion'] = NuevaLibreria::crearListaUL(array('Elemento 1', 'Elemento 2'));  // Nota: el array es un parámetro del método crearListaUL() de la librería NuevaLibreria.
        */
		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
    }


    // Formularios con Form Helper (Tutoriales 10 y 11)
    public function miFormularioAction() {
        $datos['bodyContent'] = 'pruebas/miFormularioView';  // Ruta de la vista: \application\views\pruebas\miFormularioView.php
		
		$this->load->view('baseView', $datos);  // Ruta de la vista: \application\views\baseView.php
    }

}
