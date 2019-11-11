<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

class clistarproducto extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('upload');
        $this->load->model('mproducto');
    }

    function index() {
        if(isset($_GET["btnenviar"])) {
            $where = "where name like '%".trim(strtolower($_GET["buscar"]))."%'";
        } else {
            $where = "";
        }
        $lproductos = $this->mproducto->listarproductos($where);
        $datos['productos'] = $lproductos;

        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('vlistarproducto', $datos);
    }
}
