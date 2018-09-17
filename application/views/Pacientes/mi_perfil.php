<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.2/combined/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.2/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
              <br><br>  
  <div class="container-fluid ">

<div style="width: 60%; margin: 0 auto;" >      
      
      
<div class="card  bg-light mb-3" >
<div class="card-header">
<h3> Mis datos </h3>
  </div>
  <div class="card-body">
        <form id="register-form" class="" action="<?php echo site_url('paciente/update_perfil'); ?>" method="post" role="form">  
     
          

            <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>


            <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("message").'</label>';  
                     ?>

        <div class="form-row">
        <div class="form-group d-flex justify-content-center col-md-6">
       <h3><?php echo($paciente->nombre); ?></h3> 
    </div>

    <div class="form-group col-md-6">
     <label class="" >Cédula:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-id-card"></i></div>
        </div>
     <input type="text" name="cedula" id="name" tabindex="1" class="form-control" placeholder="Cédula" value="<?php echo($paciente->cedula); ?>">           
      </div>
     <span class="text-danger"> <?php echo form_error('cedula'); ?></span>
    </div>
  </div>            
        
  
  <div class="form-group">
  <label class="" >Dirección:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-map-marker "></i></div>
        </div>
     <input type="text" name="direccion" id="name" tabindex="1" class="form-control" placeholder="Dirección" value="<?php echo($paciente->direccion); ?>">           
      </div>
     <span class="text-danger"> <?php echo form_error('direccion'); ?></span>
  </div>
                  
  <div class="form-group">
  <label class="" >Correo:</label>
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-at"></i></div>
        </div>
     <input type="email" name="correo" id="name" tabindex="1" class="form-control" placeholder="Correo" value="<?php echo($paciente->correo); ?>">           
      </div>
     <span class="text-danger"> <?php echo form_error('correo'); ?></span>
  </div>
                  
  <div class="form-row">

 <div class="form-group col-md-6"> 
 <label class="" >Teléfono:</label> 
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-phone"></i></div>
        </div>
    <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Teléfono" value="<?php echo($paciente->telefono); ?>">            
      </div>
     <span class="text-danger"> <?php echo form_error('phone'); ?></span>
                      
                    </div>
      
  
    <div class="form-group col-md-6"> <label class="" >Sexo:</label>
      <select name="sexo" id="input" class="form-control">
          <option selected><?php echo($paciente->sexo); ?></option>
        <option>  Masculino</option>
            <option>Femenino</option>
      </select>
    </div>
   </div>
            
    <div class="form-row">
  
        <div class="form-group col-md-6">
        <label class="" >Fecha de nacimiento:</label>
        <input placeholder=" Fecha de nacimiento" id="datepicker" data-date-format="MM/DD/YYYY" name="date"  width="100%" value="<?php echo($paciente->fecha_nacimiento); ?>" >
        
   </div>


  <div class="form-group col-md-6 d-flex align-items-end justify-content-center">
 
  <input type="submit"   name="register-submit" id="register-submit"  class="col-md-8 btn btn-info" value="Actualizar datos ">
</div>
        

 

      </div>            

</form>   
<hr>
    <div class="form-row col-md-12">
                               <div class="form-group col-md-12">
                               <button class="col-md-4 btn btn-info" id="btnpass" ><i class="fa fa-lock "></i> Cambiar contraseña </button>
                               </div>
                               </div>
 
  <form id="register-form"  action="<?php echo site_url('paciente/change_pass'); ?>" method="post" role="form">  


 
     
  <div class="form-row col-md-12 " id="div_pass" hidden >
                           
  
  <div class="form-group col-md-5">
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-lock"></i></div>
  </div>
<input type="password" name="lastpass" id="name" tabindex="1" class="form-control" placeholder="Antigua contraseña" value="">           
</div>
<span class="text-danger"> <?php echo form_error('lastpass'); ?></span>
</div>

<div class="form-group col-md-6">  
</div>            

<div class="form-group col-md-5">
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-lock"></i></div>
  </div>
<input type="password" name="newpass" id="name" tabindex="1" class="form-control" placeholder="Nueva contraseña" value="">           
</div>
<span class="text-danger"> <?php echo form_error('password'); ?></span>
</div>

  <div class="form-group col-md-5">
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-lock"></i></div>
  </div>
<input type="password" name="confirmpass" id="name" tabindex="1" class="form-control" placeholder="Confirmar contraseña" value="">           
</div>
<span class="text-danger"> <?php echo form_error('confirmpass'); ?></span>
</div>



     <div class="form-group  d-flex justify-content-center col-md-2">
      <input type="submit" name="register-submit" class="  btn btn-info" value="Aceptar ">   
            
</div>
      
</div>            
            </form> 
             
</div>   
   </div>
 
      </div>
  </div>

    <br><br>
   <br><br>
  
    <script>
      
  $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });


        $('#btnpass').click(function(){ 
            
            var id =  $('#div_pass').attr("hidden");  
            console.log( ".---");  console.log(id ); 
            $('#div_pass').removeAttr('hidden');
   
        });  

      </script>
       
   

    </body>
</html>