<?php
class mmenu extends CI_Model
{
    function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function mostrarproduct()
        {
            $query = $this->db->query("select * from producto ");
            return $query->result();
        }

        function listamenu()
        {
           $query = $this->db->query("Select * From menu ");
            return $query->result();
        }
        function listamenuxident($codmenuf)
        {
           $query = $this->db->query("Select * From menu where codmenu = ? ",$codmenuf);
            return $query->result();
        }
        function agregarmenu($codmenu,$entrada,$platofuerte,$postre,$fecha){
            $datos=array(
                'codmenu'     => $codmenu,
                'entrada'     => $entrada,
                'platofuerte' => $platofuerte,
                'postre'      => $postre,
                'fecha'       => $fecha
                );
            $mensaje="";
            $query = $this->db->query("Select codmenu From menu where codmenu = ? ",$codmenu);
                if($query->num_rows()==0){
                    $this->db->insert('menu',$datos);
                    $mensaje="Menú agregado exitosamente";
                }
                else{
                    $mensaje="El Menú con este, codigo ya existe.";
                }
                return $mensaje;
        }

        function actualizarmenu($codmenu,$entrada,$platofuerte,$postre,$fecha){

            $datos=[
                'codmenu'=> $codmenu,
                'entrada' => $entrada,
                'platofuerte' => $platofuerte,
                'postre' => $postre,
                'fecha' => $fecha
                ];
                $mensaje="";
            $query = $this->db->query("Select codmenu From menu where codmenu = ?",$codmenu);
                if($query->num_rows()>0){ 
                    $this->db->where('codmenu',$codmenu);
                    $this->db->update('menu',$datos);
                    $mensaje="El Menú se ha actualizado correctamente";
                }
                else{
                    $mensaje="El codigo del Menú NO Existe.";
                }
                return $mensaje;
        }
        function eliminarmenu($codmenu){
            $mensaje="";
            $query = $this->db->query("Select codmenu From menu where codmenu = ?",$codmenu); 
                if($query->num_rows()>0){ 
                    $this->db->where('codmenu',$codmenu);
                    $this->db->delete('menu');
                    $mensaje="El Menú se ha eliminado correctamente";
                }
                else{
                    $mensaje="El codigo del Menú NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
}

?>