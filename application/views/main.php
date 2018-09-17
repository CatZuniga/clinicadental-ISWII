

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<body>
    

<div class="container-fluid ">

<br>
  <div class="card" style="width: 18rem;">
  <div class="card-header">
    Opciones
  </div>
   <ul class="list-group list-group-flush">

<?php if(isset( $this->session->userdata()['login'])){
 $user_data= ($this->session->userdata()['user']);
    
 if($user_data->tipo == "admin"){  ?>
  <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('registro')?>> Registrar</a></li>
  <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('menu')?>> Pacientes</a></li>

 <?php }else if( $user_data->tipo == "asistente") {?>

   
    <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('registro')?>> Registrar</a></li>
    <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('asistente/admin_citas')?>> Administrar citas</a></li>
    <li class="list-group-item"><a class="nav-link" href="">Calendario</a></li>

 <?php } else if ($user_data->tipo == "paciente") {
     ?>
    <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('paciente/perfil')?>>Mi perfil</a></li>
    <li class="list-group-item"><a class="nav-link" href=<?php echo site_url('paciente/solicitud_cita')?>>Solicitar una cita </a></li>
    <li class="list-group-item"><a class="nav-link" href="">  Ver mi expediente</a></li>


<?php }   }
     ?>
  




  </ul>
</div>

                    <div class="group x col-xs-offset-0 col-xs-12 col-lg-offset-3 col-lg-6">
                  
                    </div>

			 
             </div>
                  
    </body>
</html>