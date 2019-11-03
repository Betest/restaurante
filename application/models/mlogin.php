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
    }
}
