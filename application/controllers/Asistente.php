<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistente extends CI_Controller {

          
          public function admin_citas()
    {
       

      $this->load->model('query_model');
      $citas =  $this->query_model->get_citas();
      $data['citas']=$citas;
      $this->load->view('util/header');
      $this->load->view('asistente/administrar_citas',$data);
      $this->load->view('util/footer');
      
    }

    public function verificar_cita(){

         
      $this->load->model('query_model');

  if(isset($_POST['aprobar'])){
  
    $flag=true;
    $aprobadas = $this->query_model->get_citas_aprobadas();
   
    $cita= $this->query_model->get_cita(key($_POST['aprobar']))[0];

   
  foreach ($aprobadas as $value ) {
       if(($value['fecha'] == $cita->fecha)&&($value['hora'] == $cita->hora)  ){
        $flag=false;
       }
    
    }
if($flag){
   
    $this->query_model->updateCita(key($_POST['aprobar']));

    $this->admin_citas();
}else{
    echo '<script>alert("La fecha y hora ya estan ocupadas") </script>';

    $this->admin_citas();
}

 }else {

    $this->query_model->deleteCita(key($_POST['declinar']));

    $this->admin_citas();
 }

    }



  }  