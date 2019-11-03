<?php
class mcategoria extends CI_Model
{
    function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function listacategorias()
        {
           $query = $this->db->query("Select * From categoria Order By name Desc");
            return $query->result();
        }
        function listacategoriasxident($identif)
        {
           $query = $this->db->query("Select * From categoria where identct = ? ",$identif);
            return $query->result();
        }
        function agregarcategoria($identct,$name,$description,$imagen){
            $datos=array(
                        'identct'=> $identct,
                        'name' => $name,
                        'description' => $description,
                        "ruta" => $imagen
                );
            $mensaje="";
            $query = $this->db->query("Select identct From categoria where identct = ? ",$identct);
                if($query->num_rows()==0){
                    $this->db->insert('categoria',$datos);
                    $mensaje="Se ha agregado la Categoria correctamente";
                }
                else{
                    $mensaje="La Categoria con este codigo ya existe";
                }
                return $mensaje;
        }

        function actualizarcategoria($identct,$name,$description,$imagen){

            $datos=[
                'identct'=> $identct,
                'name' => $name,
                'description' => $description,
                'ruta' => $imagen
                ];
                $mensaje="";
            $query = $this->db->query("Select identct From categoria where identct = ?",$identct);
                if($query->num_rows()>0){ 
                    $this->db->where('identct',$identct);
                    $this->db->update('categoria',$datos);
                    $mensaje="La Categoria se ha actualizado correctamente";
                }
                else{
                    $mensaje="El codigo de la Categoria NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
        function eliminarcategoria($identct){
            $mensaje="";
            $query = $this->db->query("Select identct From categoria where identct = ?",$identct); 
                if($query->num_rows()>0){ 
                    $this->db->where('identct',$identct);
                    $this->db->delete('categoria');
                    $mensaje="La Categoria se ha eliminado correctamente";
                }
                else{
                    $mensaje="El codigo de la Categoria NO Existe... Intentelo de Nuevo";
                }
                return $mensaje;
        }
}

?>