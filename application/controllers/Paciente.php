<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {
          
          public function perfil()
    {
        if(isset( $this->session->userdata()['login'])){
            $user_data= ($this->session->userdata()['user']);
               
        $id_user= $user_data->id;
       

      $this->load->model('User_model');
      $paciente =  $this->User_model->get_Perfil($id_user)[0];
      $data['paciente']=$paciente;
      $this->load->view('util/header');
      $this->load->view('pacientes/mi_perfil',$data);
      $this->load->view('util/footer');
      
    }

  }  
    public function solicitud_cita()
    {
        if(isset( $this->session->userdata()['login'])){
            $user_data= ($this->session->userdata()['user']);
               
        $id_user= $user_data->id;
       
        $this->load->model('User_model');
        $paciente =  $this->User_model->get_Perfil($id_user)[0];
        $data['paciente']=$paciente;
      $this->load->view('util/header');
      $this->load->view('pacientes/solicitud_cita',$data);
      $this->load->view('util/footer');
      
    }  
}

public function save_cita(){

    if(isset( $this->session->userdata()['login'])){
        $user_data= ($this->session->userdata()['user']);
           
     
        $this->form_validation->set_rules('fecha_cita', 'Fecha de cita', 'required');
        $this->form_validation->set_rules('hora', 'Hora de cita', 'required');
    
        if($this->form_validation->run()){

    $id_user= $user_data->id;   

    $hora =$this->input->post('hora'); 

    $stringdate =  $this->input->post('fecha_cita'); 
 
    
    $dt = strtotime($stringdate);

    $date = date('Y-m-d',$dt);
    
    $cita = array(
        'id_usuario' => $id_user,
        'estado' => "sin_verificar",
        'fecha' => $date,
        'hora' => $hora
      );

      $this->load->model('query_model');
      $r =  $this->query_model->save_cita($cita);
      if($r){
        redirect('user/main');
   echo '<script> alert ("Cita realizada"); </script>';
  
      }    }
    $this->session->set_flashdata('error','Datos incompletos');
    redirect('paciente/solicitud_cita');
    }
    $this->session->set_flashdata('error','Ha ocurrido un error');
    redirect('paciente/solicitud_cita');
}



public function update_perfil()
{
    
   
    $cedula = $this->input->post('cedula');
  

    $correo= $this->input->post('correo');
    $phone = $this->input->post('phone');
    $direccion = $this->input->post('direccion');
    $sexo= $this->input->post('sexo');   
    $stringdate =  $this->input->post('date');  
    
    $dt = strtotime($stringdate);

    $date = date('Y-m-d',$dt);

    $user = array(
  
        'cedula' => $cedula

    
      );
    
      $user_data= ($this->session->userdata()['user']);
               
      $id_user= $user_data->id;

      $this->load->model('User_model');
      $id = $this->User_model->update_user($id_user,$user);
    
 
    
      $profile = array(
     'direccion' => $direccion,
     'correo' => $correo,
     'telefono' => $phone,
     'fecha_nacimiento' => $date,
     'sexo' => $sexo
      ); 
      
      $this->load->model('User_model');
      $p = $this->User_model->update_profile($id_user, $profile);
   
        
      $this->session->set_flashdata('message','Datos actualizados!');
    
    
      $this->perfil();
          
      }
        
      public function change_pass(){
        
      $this->load->model('User_model');

        $this->form_validation->set_rules('lastpass', 'Current Password', 'required|alpha_numeric');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|alpha_numeric');
        $this->form_validation->set_rules('confirmpass', 'Confirm Password', 'required|alpha_numeric');
    
        if($this->form_validation->run()){

          $user_data= ($this->session->userdata()['user']);
               
          $id_user= $user_data->id;
        

            $last_password = $this->input->post('lastpass');
            $new_password = $this->input->post('newpass');
            $conf_password = $this->input->post('confirmpass');
          

            $passwd = ($user_data->password);
           
          
            if($passwd == (md5($last_password)) ){
                if($new_password == $conf_password){
                    if($this->User_model->updatePassword($new_password, $id_user)){
                                        
      $this->session->set_flashdata('message','Password updated successfully');  
      $this->perfil();

                    }
                    else{
                                               
      $this->session->set_flashdata('message','Failed to update password!');
      $this->perfil();
                    }

                }
                else{         
      $this->session->set_flashdata('message',   'New password & Confirm password is not matching');
    
    
      $this->perfil();
                }
            }
            else{
               
                     
      $this->session->set_flashdata('message','Sorry! Current password is not matching'.$passwd);
    
    
      $this->perfil();
    
        }
    }
    else{
        echo validation_errors();
    }

  }
}