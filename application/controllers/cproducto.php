<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
class cproducto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->library('upload');
        $this->load->model('mproducto');
    }

    function index()
    {
        //validando que la sesion exista
        if (!$this->session->userdata('txtident')) {
            redirect('login');
        }
        $lproductos = $this->mproducto->listarproductos();
        $datos['detailproducto'] = "";

        $lcategorias = $this->mproducto->mostrarcategoria();
        $datos['categoria'] = $lcategorias;

        $this->form_validation->set_rules('txtname', 'Nombre Producto', 'trim|required|max_length[30]|min_length[2]');
        $this->form_validation->set_rules('txtdesc', 'Descripción De Producto', 'trim|required|max_length[500]|min_length[2]');
        $this->form_validation->set_rules('txtidentct', 'Codigo Categoria', 'trim|required|max_length[30]|min_length[2]');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if (!$this->form_validation->run()) {
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('vproducto', $datos);
        } else {
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('Welcome_message');
        }
    }

    function listarproductos()
    {
        $lproductos = $this->mproducto->listarproductos();
        $datos['detailproducto'] = $lproductos;

        $lcategorias = $this->mproducto->mostrarcategoria();
        $datos['categoria'] = $lcategorias;

        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('vproducto', $datos);
    }

    function listaproductosxident()
    {

        $identif = $this->input->post('txtidentpr');
        $lproductos = $this->mproducto->listaproductosxident($identif);
        $datos['detailproducto'] = $lproductos;

        $lcategorias = $this->mproducto->mostrarcategoria();
        $datos['categoria'] = $lcategorias;

        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('vproducto', $datos);
    }

    function agregarproducto()
    {
        $lproductos = $this->mproducto->listarproductos();
        $datos['detailproducto'] = $lproductos;

        $lcategorias = $this->mproducto->mostrarcategoria();
        $datos['categoria'] = $lcategorias;

        $eliminar   = $this->input->post('btneliminar');
        if ($eliminar !== null) {
            $mens = $this->mproducto->eliminarproducto($this->input->post('txtidentpr'));
            $datos['mensaje'] = $mens;
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('vproducto', $datos);
        }

        $this->form_validation->set_rules('txtname', 'Nombre Producto', 'trim|required|max_length[30]|min_length[2]');
        $this->form_validation->set_rules('txtdesc', 'Descripción De Producto', 'trim|required|max_length[500]|min_length[2]');
        $this->form_validation->set_rules('txtidentct', 'Codigo Categoria', 'trim|required|max_length[30]|min_length[2]');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if (!$this->form_validation->run()) {
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('vproducto', $datos);
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
            $this->load->library('upload');
            $this->upload->initialize($config);

            $actualizar = $this->input->post('btnactualizar');

            if (!$this->upload->do_upload("fileToUpload")) {
                if ($actualizar !== null) {
                    $file_info = $this->upload->data();
                    $imagen = strtolower($file_info['file_name']);
                    $imagen = explode(" ", $imagen);
                    $imagen = "uploads/" . implode("", $imagen);
                    $identpra = $this->input->post('txtidentpr');
                    $namea = $this->input->post('txtname');
                    $desca = $this->input->post('txtdesc');
                    $identcta = $this->input->post('txtidentct');
                    $valuea = $this->input->post('txtvalue');
                    $mens = $this->mproducto->actualizarproducto($identpra, $namea, $desca, $identcta, $valuea, $imagen);
                    $datos['mensaje'] = $mens;
                    $this->load->view('head');
                    $this->load->view('header');
                    $this->load->view('vproducto', $datos);
                }
                $datos['mensaje'] = $this->upload->display_errors();
                $this->load->view('head');
                $this->load->view('header');
                $this->load->view('vproducto', $datos);
            } else {

                $file_info = $this->upload->data();

                $imagen = strtolower($file_info['file_name']);
                $imagen = explode(" ", $imagen);
                $imagen = "uploads/" . implode("", $imagen);
                $identpra = $this->input->post('txtidentpr');
                $namea = $this->input->post('txtname');
                $desca = $this->input->post('txtdesc');
                $identcta = $this->input->post('txtidentct');
                $valuea = $this->input->post('txtvalue');
                
                

                if ($eliminar === null && $actualizar === null) {

                    $mens = $this->mproducto->agregarproducto($identpra, $namea, $desca, $identcta, $valuea, $imagen);
                    $datos['mensaje'] = $mens;
                    $this->load->view('head');
                    $this->load->view('header');
                    $this->load->view('vproducto', $datos);
                }
            }
        }
    }

    function eliminarproducto()
    {
        $lproductos = $this->mproducto->listarproductos();
        $datos['detailproducto'] = $lproductos;

        $lcategorias = $this->mproducto->mostrarcategoria();
        $datos['categoria'] = $lcategorias;

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener minimo %d caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener maximo %d caracteres');
        if ($this->form_validation->run()) 
        {
            $identpre = $this->input->post('txtidentpre');
            $mens = $this->mproducto->eliminarproducto($identpre);
            $datos['mensaje'] = $mens;
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('vproducto', $datos);
        } else {
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('vproducto', $datos);
        }
    }
}
?>
