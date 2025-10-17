<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Pagina_model extends CI_Model{  
    /*function consultar_seccion(){
         $this->db->select("Id, nombre_seccion,activo"); 
         $this->db->from("cat_secciones"); 
         $this->db->where("activo","1"); 
         
         $query=$this->db->get(); 
         if($query!=false){ 
            if($query->num_rows()>0){ 
                return $query->result(); 
            } 
        }else{ 
            return false;
        } 
    } */

    function consultar_seccion($id_seccion){
        $sql="exec pa_consultar_nombre_seccion_x_id_seccion @idseccion='".$id_seccion."'";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        }else{
            return false;
        }
    } 
}
