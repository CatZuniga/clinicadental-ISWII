<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {


	public function index()
	{
    
		$this->load->model('User_model');
    $data['pacientes'] = $this->User_model->get_all();
    $this->load->view('util/header');
    $this->load->view('dashboardDoctor',$data);
    $this->load->view('util/footer');
    }
    
    public function show($user)
    {
     
      $data['pacientes'] =$user; 
      $this->load->view('util/header');
      $this->load->view('dashboardDoctor',$data);
      $this->load->view('util/footer');
      }
      

    public function verExp_medico($id)
    {

      $this->load->model('User_model');

      if($this->User_model->get_Exp_medico($id)){
       
        $exp_medico =$this->User_model->get_Exp_medico($id)[0];
  
        $data['exp_medico']=$exp_medico;
     
        $antecedentes = $this->User_model->selectAntecedentes($exp_medico->id_exp_medico);
    
      
        $data['antecedentes'] = $antecedentes;
    
      
        $this->load->view('util/header');
       
        $this->load->view('expedientes/exp_medico',$data);
    
        $this->load->view('util/footer');
    
   
     
    }

  } 


  function buscar(){
    $cedula = $this->input->post('cedula');
    $this->load->model('User_model');
   $allUser = $this->User_model->get_all();


   if($cedula == "" ){
    $this->session->set_flashdata('error', 'Digite una cédula '); 
    redirect('/menu');
    
 }else{

     if($allUser>0){
     
      foreach($allUser as $user){
      
       if (strtoupper($cedula)== strtoupper($user['cedula'])) {
         
           $array[] = $user;     
         
       }

      }
      if($array != null){
    
   $this->show($array);

      }else{
       $this->session->set_flashdata('error', 'No se encontraron coincidencias '); 
redirect('/menu');

      }
         }
 }
  }

public function action(){
 
  if(isset($_POST['verPerfil'])){
  
    $this->verPerfil(key($_POST['verPerfil']));
  
    
 }else if(isset($_POST['verExp_med'])) {
  $id=(key($_POST['verExp_med']));
 
  if(!$this->User_model->get_Exp_medico($id)){
   
    $paciente =  $this->User_model->get_Perfil($id);
    $data['paciente']=$paciente;
   
    $this->load->view('util/header');
   
    $this->load->view('expedientes/new_exp_medico',$data);

    $this->load->view('util/footer');
    //nuevo
   } else{
     
  $exp_medico =$this->User_model->get_Exp_medico($id)[0];
  
    $data['exp_medico']=$exp_medico;
 
    $antecedentes = $this->User_model->selectAntecedentes($exp_medico->id_exp_medico);

  
    $data['antecedentes'] = $antecedentes;

  
    $this->load->view('util/header');
   
    $this->load->view('expedientes/exp_medico',$data);

    $this->load->view('util/footer');

   
  }

///////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }else if(isset($_POST['verExp_dental'])) {
 
  $this->load->model('Expediente_model');
  
  $id=(key($_POST['verExp_dental']));
 
  if(!$this->Expediente_model->get_Exp_dental($id)){

    $exp = array(
      'id_usuario' => $id
      );

   $id_exp_dental = $this->Expediente_model->save_exp_dental($exp);
 
   $exp_dental =$this->Expediente_model->get_Exp_dental($id)[0];
  
   redirect('expediente/load_exp_dental/'.$id);
    //nuevo
   } else{
     
 // $exp_dental =$this->Expediente_model->get_Exp_dental($id)[0];
redirect('expediente/load_exp_dental/'.$id);
  }

 }

}

public function saveExp_medico(){

 $id_paciente = $this->input->post('id_usuario');
 $num_exp_salud=  $this->input->post('num_exp_salud');
	
 $exp_medico = array(
  'id_usuario' => $id_paciente,
   'num_exp_salud' => $num_exp_salud

  );
 
$id_exp_medico = $this->User_model->saveExp_medico($exp_medico);


if ($id_exp_medico){

  if(isset($_POST['submit'])){
		
    if(!empty($_POST['check'])) {
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['check']);
    
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['check'] as $selected) {

       $detalle =  $this->input->post($selected);
     
    $antecedente = array(
      'id_exp_medico' => $id_exp_medico,
       'nombre' => $selected,
       'detalle' => $detalle
      );
  $result=$this->User_model->insert_antecedente($antecedente);
 
   
    
    }
    
    }
    else{
    
    echo '<script language="javascript">alert("Please Select Atleast One Option.");</script>'; 
    }
  }
}
redirect('index');
}

public function updateExpMedico(){
		
  $exp_medico =$this->uri->segment(3);


  // get all days from that ride
  
$antecedentes=$this->User_model->selectAntecedentes($exp_medico); 



foreach($antecedentes as $antecedente) { 

  $this->User_model->delete_antecedente($antecedente['id']);


}
  
if(isset($_POST['submit'])){
		
  if(!empty($_POST['check'])) {
  // Counting number of checked checkboxes.
  $checked_count = count($_POST['check']);
  
  // Loop to store and display values of individual checked checkbox.
  foreach($_POST['check'] as $selected) {

     $detalle =  $this->input->post($selected);
   
  $antecedente = array(
    'id_exp_medico' => $exp_medico,
     'nombre' => $selected,
     'detalle' => $detalle
    );
$result=$this->User_model->insert_antecedente($antecedente);
  
  }
  
  }
  else{
  
  echo '<script language="javascript">alert("Please Select Atleast One Option.");</script>'; 
  }
}
  
echo '<script language="javascript">alert("Inseted");</script>'; 

$id = $this->input->post('id_usuario');
$this->verExp_medico($id);
}
    

}


 



