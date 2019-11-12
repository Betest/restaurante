<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mlogin extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($ident, $password)
    {
        $this->db->where('ident', $ident);
        $this->db->where('password', $password);


        $this->security->xss_clean($ident);
        $this->security->xss_clean($password);


        $q = $this->db->get('usuario');

        return $q->result_array();

        if (count($q) > 0) {
            $resp = "Bienvenido";
        } else {
            $resp = "Error";
        }

        return $resp;
    }

    public function registrar()
    {

        $ident = $this->input->post('txtident');
        $password = $this->input->post('txtpassword');
        $tipeuser = $this->input->post('tipeuser');
        $email = $this->input->post('email');


        $ident = $this->security->xss_clean($ident);
        $password = $this->security->xss_clean($password);
        $tipeuser = $this->security->xss_clean($tipeuser);
        $email = $this->security->xss_clean($email);

        $query = $this->db->get_where("usuario", array("ident" => $ident));

        $resultado = $query->result_array();
        if (count($resultado) > 0) {
            $resp = "Este cliente ya existe. Revise los datos ingresados";
        } else {
            $vector = array(
                "ident" => $ident,
                "password" => md5($password),
                "tipeuser" => $tipeuser,
                "email" => $email
            );
            $this->db->insert("usuario", $vector);
            $resp = "Registro insertado con exito";
        }

        return $resp;
    }

    function eliminar($param)
    {

        $this->db->where("ident", $param);
        return $this->db->delete("usuario");
    }
    function detalle($param)
    {

        $query = $this->db->get_where("usuario", array("ident" => $param));
        return $query->result_array();
    }

    function modificar($param)
    {

        $password = $this->input->post('password');
        $ident = $this->input->post('ident');
        $tipeuser = $this->input->post('tipeuser');
        $email = $this->input->post('email');


        $password = $this->security->xss_clean($password);
        $ident = $this->security->xss_clean($ident);
        $tipeuser = $this->security->xss_clean($tipeuser);
        $email = $this->security->xss_clean($email);

        $vector = array(

            "password" => md5($password),
            "ident" => $ident,
            "tipeuser" => $tipeuser,
            "email" => $email
        );

        $this->db->where("ident", $param);
        if ($this->db->update("usuario", $vector)) {
            $mensaje = "Modificacion realizada";
        } else {
            $mensaje = "No se puede realizar el proceso. Intente de nuevo";
        }

        return $mensaje;
    }
}
