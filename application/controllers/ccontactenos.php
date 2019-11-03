<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ccontactenos extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');


        $this->load->model('mcontactenos');
    }
    public function index()
    {
        
      //  $this->load->view('head');
        $this->load->view('vcontactenos');
      //  $this->load->view('vlogin');
        
    }
}