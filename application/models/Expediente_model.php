<?php
class Expediente_model extends CI_Model {



    function save_estado_pieza($estado)
    {
   return $this->db->insert('estado_pieza', $estado);
     
    }

    function save_alteracion($estado)
    {
   return $this->db->insert('alteración_planos', $estado);
     
    }

    function save_estado_peridontal($estado)
    {
   return $this->db->insert('estado_peridontal', $estado);
     
    }


    function save_Exp_dental($exp)
    {
   return $this->db->insert('exp_dental', $exp);
     
    }

    function get_Exp_dental($id){
 
        $this->db->select('*,  exp_dental.id AS id_exp_dental');
        $this->db->from('exp_dental');
        $this->db->join('usuario', 'exp_dental.id_usuario = usuario.id');
      
        $this->db->where('usuario.id' ,$id );
        $query = $this->db->get();
     
        return $query->result();
      
      }
    
      function get_Exp_dental_id_exp($id_exp){
 
        $this->db->select('*,  exp_dental.id AS id_exp_dental');
        $this->db->from('exp_dental');
        $this->db->join('usuario', 'exp_dental.id_usuario = usuario.id');
      
        $this->db->where('exp_dental.id' ,$id_exp );
        $query = $this->db->get();
      //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
    
        return $query->result();
      
      }


        
  function select_estado_pieza($id){
    $this->db->select('*');
    $this->db->from('estado_pieza');
    $this->db->where('id_exp_dental',$id );
    $query = $this->db->get();
 //  
 
    return $query->result_array();
  }

  
  function select_alteracion($id){

      $this->db->select('*');
      $this->db->from('alteración_planos');
      $this->db->where('id_exp_dental',$id );
      $query = $this->db->get();

      return $query->result_array();

  }

  function select_peridontal($id){

    $this->db->select('*');
    $this->db->from('estado_peridontal');
    $this->db->where('id_exp_dental',$id );
    $query = $this->db->get();

    return $query->result_array();

}


function delete_alteracion($id){

  $this->db->where('id', $id);
  $this->db->delete('alteración_planos');  
  }



  function delete_estado($id){

    $this->db->where('id', $id);
    $this->db->delete('estado_pieza');  
    }

    
  function delete_peridontal($id){

    $this->db->where('id', $id);
    $this->db->delete('estado_peridontal');  
    }

}