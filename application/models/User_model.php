<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {
    $pass = md5($pass);
    $query = $this->db->get_where('usuario', array('username' => $user, 'password' => $pass));

	  return $query->result_object();
  }


  function select ($user){
    $query = $this->db->get_where('usuario', array('username' => $user));
    
        return $query->result_object();
  }
 


  function userSave($user)
  {
    $user['password']= md5( $user['password']);
    $this->db->insert('usuario', $user);
    $insert_id = $this->db->insert_id();
 
    return  $insert_id;

  }

  function saveProfile($user)
  {
 return $this->db->insert('perfil', $user);
   
  }

  function get_perfil($id){


    $this->db->select('*,  perfil.id AS id_perfil');
    $this->db->from('perfil');
    $this->db->join('usuario', 'perfil.id_usuario = usuario.id');
  
    $this->db->where('usuario.id' ,$id );
    $query = $this->db->get();
 //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
	  return $query->result();

  }
  
  function get_all() {

    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('tipo', "paciente");
 
    $query = $this->db->get();
 //   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
	  return $query->result_array();
  }

function get_Exp_medico($id){
 
  $this->db->select('*,  exp_medico.id AS id_exp_medico');
  $this->db->from('exp_medico');
  $this->db->join('usuario', 'exp_medico.id_usuario = usuario.id');

  $this->db->where('usuario.id' ,$id );
  $query = $this->db->get();
//   SELECT r.* FROM `rides` as r INNER JOIN `users` AS u ON r.id_user =u.id
  return $query->result();

}


function saveExp_medico($exp) {
  $this->db->insert('exp_medico', $exp);

  $insert_id = $this->db->insert_id();

  return  $insert_id;

}

function insert_antecedente($antecedente) {
  return     $this->db->insert('antecedentes_clinicos', $antecedente);
 }

 function delete_antecedente($id){

  $this->db->where('id', $id);
  $this->db->delete('antecedentes_clinicos');  
  }
 
  
  function selectAntecedentes($id){
    $this->db->select('*');
    $this->db->from('antecedentes_clinicos');
    $this->db->where('id_exp_medico',$id );
    $query = $this->db->get();
 //  
 
    return $query->result_array();
  }

public function update_user($id , $user)
{

$this->db->where('id', $id);
$this->db->update('usuario', $user);

}
public function update_profile($id_user,$perfil)
{
  $this->db->where('id_usuario', $id_user);
  $this->db->update('perfil', $perfil);
}

  public function updatePassword($new_password, $id_user){
  $data = array(
      'password'=> md5($new_password)
      );
      return $this->db->where('id', $id_user)
                      ->update('usuario', $data); }


}
