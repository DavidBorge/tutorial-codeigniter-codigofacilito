<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevoControlador extends CI_Controller {

    public function __construct(&$params)
    {
        parent::__construct($params);
    }

    public function index()
    {
        $this->load->view();
    }

}
