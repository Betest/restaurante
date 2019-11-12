<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class clogin extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');


        $this->load->model('mlogin');
    }



    public function index()
    {
        //validando que la sesion exista
        if ($this->session->userdata('txtident')) {
            redirect('clistarproducto');
        }





        if ($this->form_validation->run() == FALSE) {


            if (isset($_POST['txtident'], $_POST['txtpassword'])) {
                if ($this->mlogin->login($_POST['txtident'], md5($_POST['txtpassword']))) {
                    $this->session->set_userdata('txtident', $_POST['txtident']); //asignando la sesion al usuario actual
                    redirect('clistarproducto');
                }
            }
        } else {
            $this->form_validation->set_rules('docident', 'Cliente', 'trim|required');
            $this->form_validation->set_rules('clave', 'Clave', 'trim|required');

            $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            redirect('login');
        }


        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('vlogin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
