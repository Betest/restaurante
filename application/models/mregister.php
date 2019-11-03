
<?php
class mregister extends CI_Model
{
    function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function getusuario(string $ident){
            $this->db->select('*')->from('usuario')->where('ident', $ident)->get()->result();
        }
    
        public function adduser(array $datos){
            return $this->db->insert('usuario', $datos);
        }
    
        public function validateuser(string $ident, string $password){
    
            $this->db->where('ident', $ident);
            $this->db->where('password', $password);
            $this->db->select('1')->from('usuario')->get()->result();
            
        }
        

        function listarusuarios()
        {
           $query = $this->db->query("Select * From usuario ");
            return $query->result();
        }
        function listausuariosxident($identif)
        {
           $query = $this->db->query("Select * From usuario where ident = ?",$identif);
            return $query->result();
        }
        function agregarusuario($ident,$tipeuser,$email,$password){
            $datos=array(
                        'ident'=> $ident,
                        'tipeuser' => $tipeuser,
                        'email' => $email,
                        'password' => md5($password)
                );
            
            $mensaje="";
            $query = $this->db->query("Select ident From usuario where ident = ?",$ident);
                if($query->num_rows()==0){
                    $this->db->insert('usuario',$datos);
                    $mensaje="Se ha agregado el Usuario correctamente";
                }
                else{
                    $mensaje="El Usuario con este codigo ya existe";
                }
                return $mensaje;
        }

        function actualizarusuario($ident,$tipeuser,$email,$password){

            $datos=[
                'ident'=> $ident,
                'tipeuser' => $tipeuser,
                'email' => $email,
                'password' => $password
                ];
                $mensaje="";
            $query = $this->db->query("Select ident From usuario where ident = ?",$ident);
                if($query->num_rows()>0){ 
                    $this->db->where('dient',$ident);
                    $this->db->update('usuario',$datos);
                    $mensaje="El Usuario se ha actualizado correctamente";
                }
                else{
                    $mensaje="El usuario NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
        function eliminarusuario($ident){
            $mensaje="";
            $query = $this->db->query("Select ident From usuario where ident = ?",$ident); 
                if($query->num_rows()>0){ 
                    $this->db->where('ident',$ident);
                    $this->db->delete('usuario');
                    $mensaje="El Usuario se ha eliminado correctamente";
                }
                else{
                    $mensaje="El Usuario NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
}

?>