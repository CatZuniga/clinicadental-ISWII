<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index() {
		
				$this->load->view('users/index', $data);
			}
		
	
	public function login()
	{
		$this->load->library('form_validation'); 
		$this->load->view('login');
	
	
	}

	
	public function registro()
	{
		$this->load->library('form_validation'); 
		$this->load->view('util/header');
		$this->load->view('registro');
		$this->load->view('util/footer');
	
	
	}


	public function main()
	{
		$this->load->view('util/header');
		$this->load->view('main');
		$this->load->view('util/footer');
	
	}

	function login_validation()  
	{  
			 $this->load->library('form_validation');  
			 $this->form_validation->set_rules('usernameLogin', ' Username', 'required');  
			 $this->form_validation->set_rules('password', 'Password', 'required');  
			 if($this->form_validation->run())  
			 {  
						//true  
						$username = $this->input->post('usernameLogin');  
						$password = $this->input->post('password');  
						//model function  
						$this->load->model('user_model');  
						$r=$this->user_model->authenticate($username, $password); 
						
				
if(sizeof($r) > 0) {
	$data= array(
		'user' => $r[0],
		'login' => TRUE

	);
	 $this->session->set_userdata($data);
    
		redirect('user/main'); 

} else {
	 $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos');
	// redirect('/');
	$this->login();  
} 
			 }  
			 else  
			 {  
						//false  
						$this->login();  
				//		echo ('fatal');
			 }  
	}  

	public function logout() {
		
		$this->session->sess_destroy();
	
		redirect('/main');
			}
		

public function registrar(){

	 $this->load->library('form_validation');  
	 $this->form_validation->set_rules('username', 'Usuario', 'required');  
	 $this->form_validation->set_rules('password', 'Contraseña', 'required');  
	 $this->form_validation->set_rules('nombre', 'Nombre', 'required');
	 $this->form_validation->set_rules('correo', 'Correo', 'required');
	 $this->form_validation->set_rules('phone', 'Teléfono', 'required');
	 $this->form_validation->set_rules('cedula', 'Cedula', 'required');
	 $this->form_validation->set_rules('direccion', 'Cedula', 'required');
	 $this->form_validation->set_rules('sexo', 'Seleccione el sexo', 'required');
	// $this->form_validation->set_rules('date', 'Fecha de nacimiento', 'required');

	 if($this->form_validation->run())  
	 {  
		 
				//true  
				$username = $this->input->post('username');
				$pass = $this->input->post('password');
				$nombre = $this->input->post('nombre');
				$correo= $this->input->post('correo');
				$phone = $this->input->post('phone');
				$cedula = $this->input->post('cedula');
				$direccion = $this->input->post('direccion');
				$sexo= $this->input->post('sexo');   
				$stringdate =  $this->input->post('date');  
				$tipo =  $this->input->post('tipo');  

				$dt = strtotime($stringdate);

				$date = date('Y-m-d',$dt);

				if ($tipo == ""){
					$tipo = "paciente";
				}
  

$user = array(
	'username' => $username,
	'nombre' => $nombre,
	'cedula' => $cedula,
	'password'=> $pass,
	'tipo' => $tipo,

  );

  $this->load->model('User_model');
  $id = $this->User_model->userSave($user);

  if($id) {

  $profile = array(
 'id_usuario'=> $id,
 'direccion' => $direccion,
 'correo' => $correo,
 'telefono' => $phone,
 'fecha_nacimiento' => $date,
 'sexo' => $sexo
  ); 
  
  $this->load->model('User_model');
  $p = $this->User_model->saveProfile($profile);
if($p){
	
  $this->session->set_flashdata('message','USUARIO REGISTRADO');


  $this->registro();
}

  } 
  $this->session->set_flashdata('error', 'Ha ocurrido un error');

// redirect('/');
//$this->registro();

 // $this->session->set_flashdata('message','User saved');
	//	redirect('usuario/listado');

	} else {
  $this->session->set_flashdata('message','Ha ocurrido un error en el registro');
  
  $this->registro();
			
	}

}

}





