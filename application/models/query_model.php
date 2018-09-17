<?php
class query_model extends CI_Model {



    function save_cita($cita)
    {
   return $this->db->insert('cita', $cita);
     
    }

    function get_citas()
    {
   
        $this->db->select('*,  cita.id AS id_cita');
        $this->db->from('cita');
        $this->db->join('usuario', 'cita.id_usuario = usuario.id');
      
        $this->db->where('cita.estado' ,'sin_verificar' );

        $this->db->order_by("hora asc, fecha asc");
        $query = $this->db->get();
      //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
      return $query->result_array();
    }
   
    function get_citas_aprobadas()
    {
   
        $this->db->select('*,  cita.id AS id_cita');
        $this->db->from('cita');
        $this->db->join('usuario', 'cita.id_usuario = usuario.id');
      
        $this->db->where('cita.estado' ,'aprobada' );

        $this->db->order_by("hora asc, fecha asc");
        $query = $this->db->get();
      //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
      return $query->result_array();
    }

    function get_cita($id)
    {

        $this->db->select('*');
        $this->db->from('cita');
        $this->db->where('cita.id' ,$id);
        $query = $this->db->get();
        return $query->result();
    }
    

  function updateCita($id){    
    $this->db->set( 'estado','aprobada');
    $this->db->where('id', $id);
    $this->db->update('cita'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
  }

  function deleteCita($id){

    $this->db->where('id', $id);
    $this->db->delete('cita');  
    }


}