<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

class cmenu extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('upload');
        $this->load->model('mmenu');
        $this->load->view('head');
        $this->load->view('header');
    }

    function index() {
        $ltypeproducto= $this->mmenu->mostrarproduct();
        $datos['menu'] = $ltypeproducto;

        $this->load->view('vmenu', $datos);
    }
}
