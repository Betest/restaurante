<?php
class mproducto extends CI_Model
{
    function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function mostrarcategoria()
        {
            $query = $this->db->query("Select identct from categoria");
            return $query->result();
        }

        function listarproductos()
        {
           $query = $this->db->query("Select * From producto ");
            return $query->result();
        }
        function listaproductosxident($identif)
        {
           $query = $this->db->query("Select * From producto where identpr = ?",$identif);
            return $query->result();
        }
        function agregarproducto($identpr,$name,$desc,$identct,$value, $imagen){
            $datos=array(
                        'identpr'=> $identpr,
                        'name' => $name,
                        'desc' => $desc,
                        'identct' => $identct,
                        'value' => $value,
                        "ruta" => $imagen
                );
            
            $mensaje="";
            $query = $this->db->query("Select identpr From producto where identpr = ?",$identpr);
                if($query->num_rows()==0){
                    $this->db->insert('producto',$datos);
                    $mensaje="Se ha agregado el Producto correctamente";
                }
                else{
                    $mensaje="El Producto con este codigo ya existe";
                }
                return $mensaje;
        }

        function actualizarproducto($identpr,$name,$desc,$identct,$value, $imagen){

            $datos=[
                'identpr'=> $identpr,
                'name' => $name,
                'desc' => $desc,
                'identct' => $identct,
                'value' => $value,
                'ruta' => $imagen
                ];
                $mensaje="";
            $query = $this->db->query("Select identpr From producto where identpr = ?",$identpr);
                if($query->num_rows()>0){ 
                    $this->db->where('identpr',$identpr);
                    $this->db->update('producto',$datos);
                    $mensaje="El Producto se ha actualizado correctamente";
                }
                else{
                    $mensaje="El codigo de Producto NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
        function eliminarproducto($identpr){
            $mensaje="";
            $query = $this->db->query("Select identpr From producto where identpr = ?",$identpr); 
                if($query->num_rows()>0){ 
                    $this->db->where('identpr',$identpr);
                    $this->db->delete('producto');
                    $mensaje="El Producto se ha eliminado correctamente";
                }
                else{
                    $mensaje="El codigo de Producto NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
}

?>