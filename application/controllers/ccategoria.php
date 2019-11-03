<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

class ccategoria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('upload');
        $this->load->model('mcategoria');
    }
    function index()
    {
        //validando que la sesion exista
        if (!$this->session->userdata('txtident')) {
            redirect('login');
        }
        $lcategorias = $this->mcategoria->listacategorias();
        $datos['detailcategoria'] = "";

        $this->form_validation->set_rules('txtidentct', 'Codigo Categoria', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('txtname', 'Nombre Categoria', 'trim|required|max_length[30]|min_length[6]');
        $this->form_validation->set_rules('txtdescription', 'Descripción De Categoria', 'trim|required|max_length[500]|min_length[6]');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if (!$this->form_validation->run()) {
            $this->load->view('vcategoria', $datos);
        } else {
            $this->load->view('Welcome_message');
        }
    }
    function listacategorias()
    {
        $lcategorias = $this->mcategoria->listacategorias();
        $datos['detailcategoria'] = $lcategorias;
        $this->load->view('vcategoria', $datos);
    }
    function listacategoriasxident()
    {
        $identif = $this->input->post('txtidentct');
        $lcategorias = $this->mcategoria->listacategoriasxident($identif);
        $datos['detailcategoria'] = $lcategorias;
        $this->load->view('vcategoria', $datos);
    }
    function agregarcategoria()
    {

        $lcategorias = $this->mcategoria->listacategorias();
        $datos['detailcategoria'] = $lcategorias;

        $this->form_validation->set_rules('txtidentct', 'Codigo Categoria', 'trim|required|max_length[30]|min_length[2]');
        $this->form_validation->set_rules('txtname', 'Nombre Categoria', 'trim|required|max_length[30]|min_length[6]');
        $this->form_validation->set_rules('txtdescription', 'Descripción De Categoria', 'trim|required|max_length[500]|min_length[6]');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if (!$this->form_validation->run()) {
            $this->load->view('vcategoria', $datos);
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("fileToUpload")) {
                $datos['mensaje'] = $this->upload->display_errors();
                $this->load->view('vcategoria', $datos);
            } else {

                $file_info = $this->upload->data();

                $imagen = strtolower($file_info['file_name']);
                $imagen = explode(" ", $imagen);
                $imagen = "uploads/" . implode("", $imagen);

                $identcta = $this->input->post('txtidentct');
                $namea = $this->input->post('txtname');
                $descriptiona = $this->input->post('txtdescription');
                $mens = $this->mcategoria->agregarcategoria($identcta, $namea, $descriptiona, $imagen);
                $datos['mensaje'] = $mens;
                $this->load->view('vcategoria', $datos);
            }
        }
    }
    function actualizarcategoria()
    {

        $lcategorias = $this->mcategoria->listacategorias();
        $datos['detailcategoria'] = $lcategorias;

        $this->form_validation->set_rules('txtidentctact', 'Codigo Categoria', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('txtnameact', 'Nombre Categoria', 'trim|required|max_length[30]|min_length[6]');
        $this->form_validation->set_rules('txtdescriptionact', 'Descripción De Categoria', 'trim|required|max_length[500]|min_length[6]');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if (!$this->form_validation->run()) {
            $this->load->view('vcategoria', $datos);
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("fileToUpload")) {
                $datos['mensaje'] = $this->upload->display_errors();
                $this->load->view('vcategoria', $datos);
            } else {

                $file_info = $this->upload->data();

                $imagen = strtolower($file_info['file_name']);
                $imagen = explode(" ", $imagen);
                $imagen = "uploads/" . implode("", $imagen);

                $identcta = $this->input->post('txtidentctact');
                $namea = $this->input->post('txtnameact');
                $descriptiona = $this->input->post('txtdescriptionact');
                $mens = $this->mcategoria->actualizarcategoria($identcta, $namea, $descriptiona, $imagen);
                $datos['mensaje'] = $mens;
                $this->load->view('vcategoria', $datos);
            }
        }
    }
    function eliminarcategoria()
    {

        $lcategorias = $this->mcategoria->listacategorias();
        $datos['detailcategoria'] = $lcategorias;

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if ($this->form_validation->run()) {

            $identcte = $this->input->post('txtidentcte');
            $mens = $this->mcategoria->eliminarcategoria($identcte);
            $datos['mensaje'] = $mens;
            $this->load->view('vcategoria', $datos);
        } else {
            $this->load->view('vcategoria', $datos);
        }
    }
}
