<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expediente extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->model('Expediente_model');
    }

public function load_exp_dental(){

   
    $id =$this->uri->segment(3);   
    $exp_dental =$this->Expediente_model->get_Exp_dental($id)[0];
    $id_exp_dental = $exp_dental->id_exp_dental;
 
    
    $estado_pieza=$this->Expediente_model->select_estado_pieza($id_exp_dental);
    $alteracion=$this->Expediente_model->select_alteracion($id_exp_dental);
    $peridontal=$this->Expediente_model->select_peridontal($id_exp_dental);

    $data['exp_dental']=$exp_dental;
    $data['estado_pieza']=$estado_pieza;
    $data['alteracion']= $alteracion;
    $data['peridontal']= $peridontal;
 
 //selects 
  
    $this->load->view('util/header');
   
    $this->load->view('expedientes/exp_dental',$data);

    $this->load->view('util/footer');

   

    
} 


 public function save_estado_pieza(){

    $id_exp_dental =$this->uri->segment(3);

    $pieza46= $this->input->post('pieza_46');  
    $pieza85= $this->input->post('pieza_85');  
    $fecha = date('Y-m-d');


    $estado = array(
        'id_exp_dental' => $id_exp_dental,
         'pieza_46' => $pieza85,
         'pieza_85' => $pieza46,
         'fecha' => $fecha
        );
    $result=$this->Expediente_model->save_estado_pieza($estado);
   
    $exp_dental=$this->Expediente_model->get_Exp_dental_id_exp($id_exp_dental)[0];

    $id = $exp_dental->id;

redirect('expediente/load_exp_dental/'.$id);


  }

  public function save_alteracion(){

    $id_exp_dental =$this->uri->segment(3);

    $pieza46= $this->input->post('alt_46');  
    $pieza85= $this->input->post('alt_85');  
    $fecha = date('Y-m-d');


    $estado = array(
        'id_exp_dental' => $id_exp_dental,
         'pieza_46' => $pieza85,
         'pieza_85' => $pieza46,
         'fecha' => $fecha
        );
    $result=$this->Expediente_model->save_alteracion($estado);
    
    $exp_dental=$this->Expediente_model->get_Exp_dental_id_exp($id_exp_dental)[0];

    $id = $exp_dental->id;

redirect('expediente/load_exp_dental/'.$id);


  }

  public function save_estado_peridontal(){

    $id_exp_dental =$this->uri->segment(3);

    $pieza17_16 = $this->input->post('17'); 
    $pieza11 = $this->input->post('11'); 
    $pieza26_27 = $this->input->post('26'); 
    $pieza36_37 = $this->input->post('36'); 
    $pieza31 = $this->input->post('31'); 
    $pieza47_46= $this->input->post('47'); 

    $fecha = date('Y-m-d');


    $estado = array(
        'id_exp_dental' => $id_exp_dental,   
        '17/16'=>$pieza17_16,
        'pieza11' => $pieza11,
        '26/27'=> $pieza26_27,
        '36/37' => $pieza36_37,
        'pieza31' => $pieza31,
        '47/46'=> $pieza47_46,
         'fecha' => $fecha
        );
    $result=$this->Expediente_model->save_estado_peridontal($estado);
   
    $exp_dental=$this->Expediente_model->get_Exp_dental_id_exp($id_exp_dental)[0];

    $id = $exp_dental->id;

redirect('expediente/load_exp_dental/'.$id);


  }

public function action()
{
    $id_exp_dental =$this->uri->segment(3);

    if(isset($_POST['delete_alteracion'])) {
        $id=(key($_POST['delete_alteracion']));
     
     $this->Expediente_model->delete_alteracion($id);
              
}  else if(isset($_POST['delete_estado'])) {
    $id=(key($_POST['delete_estado']));
 
 $this->Expediente_model->delete_estado($id);
          
}
  else if(isset($_POST['delete_peridontal'])) {
    $id=(key($_POST['delete_peridontal']));
 
 $this->Expediente_model->delete_peridontal($id);
          
}
$exp_dental=$this->Expediente_model->get_Exp_dental_id_exp($id_exp_dental)[0];

$id = $exp_dental->id;

redirect('expediente/load_exp_dental/'.$id);

}


}