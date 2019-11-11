
<?php
    ini_set ("display_errors", 1 );
    error_reporting (E_ALL);
    class cregister extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();            
            $this->load->model('mregister');
        }

        function index()
        {
            $lusuarios =$this->mregister->listarusuarios();
            $datos['usuarios']= "";

            $this->form_validation->set_rules('txtident','Identificacion','required|min_length[6]|max_length[15]|is_unique[usuario.ident]');
            $this->form_validation->set_rules('txttipeuser','Tipo usuario','required|min_length[3]|max_length[15]');
            $this->form_validation->set_rules('txtemail','Email','required|valid_email|is_unique[usuario.email]');
            $this->form_validation->set_rules('txtpassword','Contraseña','required|min_length[6]');
            // $this->form_validation->set_rules('passwordc','Confirmacion contraseña','trim|required|min_length[6]|matches[txtpassword]');

            $this->form_validation->set_message('required','El campo %s es obligatorio');
            $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d caracteres');
            if (!$this->form_validation->run())
            {
                $this->load->view('head');
                $this->load->view('header');
                $this->load->view('vregister',$datos);
            }
            else
            {
                $this->load->view('header');
                $this->load->view('Welcome_message');
            }
        }
            function listarusuarios(){
                $lusuarios = $this->mregister->listarusuarios();
                $datos['usuarios']=$lusuarios;

                $this->load->view('header');
                $this->load->view('vregister',$datos);
            }
            function listausuariosxident(){

                $identif = $this->input->post('txtidentpr');
                $lusuarios = $this->mregister->listausuariosxident($identif);
                $datos['usuarios']=$lusuarios;

                $this->load->view('header');
                $this->load->view('vregister',$datos);
            }
            function agregarusuario()
            {
                $lusuarios = $this->mregister->listarusuarios();
                $datos['usuarios']=$lusuarios;

                $this->form_validation->set_rules('txtident','Identificacion','required');
                $this->form_validation->set_rules('txttipeuser','Tipo usuario','required|max_length[15]');
                $this->form_validation->set_rules('txtemail','Email','required|valid_email');
                $this->form_validation->set_rules('txtpassword','Contraseña','required');
                $this->form_validation->set_rules('txtpasswordc','Confirmacion contraseña','trim|required|matches[txtpassword]');

                $this->form_validation->set_message('required','El campo %s es obligatorio');
                $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
                $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d caracteres');
                if (!$this->form_validation->run())
                {
                    $this->load->view('head');
                    $this->load->view('header');
                    $this->load->view('vregister',$datos);
                }
                else
                {                    
                        

                        $ident = $this->input->post('txtident');
                        $tipeuser = $this->input->post('txttipeuser');
                        $email = $this->input->post('txtemail');
                        $password = $this->input->post('txtpassword');
                        $mens=$this->mregister->agregarusuario($ident,$tipeuser,$email,$password);
                        $datos['mensaje']=$mens;
                        if($mens === 200) {
                            redirect("producto");
                        } else {
                            
                            $this->load->view('vregister',$datos);
                        }
                  

                }   
            }
            function actualizarusuario()
            {

                $lusuarios = $this->mregister->listarusuarios();
                $datos['usuarios']=$lusuarios;

                $this->form_validation->set_rules('txtident','Identificacion','required|min_length[6]|max_length[15]|is_unique[usuario.ident]');
                $this->form_validation->set_rules('txttipeuser','Tipo usuario','required|min_length[3]|max_length[15]');
                $this->form_validation->set_rules('txtemail','Email','required|valid_email|is_unique[usuario.email]');
                $this->form_validation->set_rules('txtpassword','Contraseña','required|min_length[6]');
                $this->form_validation->set_rules('txtpasswordc','Confirmacion contraseña','trim|required|min_length[6]|matches[txtpassword]');

                $this->form_validation->set_message('required','El campo %s es obligatorio');
                $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
                $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d caracteres');
                if (!$this->form_validation->run())
                {
                    $this->load->view('vregister',$datos);
                }
                else    
                {

                                           
                        $identa = $this->input->post('txtidentact');
                        $tipeusera = $this->input->post('txttipeuseract');
                        $emaila = $this->input->post('emailact');
                        $passworda = $this->input->post('txtpasswordact');
                        $mens=$this->mregister->actualizarproducto($identa,$tipeusera,$emaila,$passworda);
                        $datos['mensaje']=$mens;
                        $this->load->view('vregister',$datos);
                    
 
                }   
            }
    function eliminarusuario(){
                $lusuarios= $this->mregister->listarusuarios();
                $datos['usuarios']=$lusuarios;

                 $this->form_validation->set_message('required','El campo %s es obligatorio');
                 $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
                 $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d caracteres');
                if ($this->form_validation->run())
                {
                    $ident = $this->input->post('txtident');
                    $mens= $this->mregister->eliminarusuario($ident);
                    $datos['mensaje']=$mens;
                    $this->load->view('vregister',$datos);
                }
                else{
                    $this->load->view('vregister',$datos);
                }
        
    }
}
?>
