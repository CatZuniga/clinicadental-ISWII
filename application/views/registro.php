<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
 

<?php if(isset( $this->session->userdata()['login'])){
 $user_data= ($this->session->userdata()['user']);
    
    ?>
 <label >  <?php echo $user_data->username ?> </label>
   

<?php }   
     ?>
  
                     
  <div class="container-fluid wrap">

  
        <form id="register-form" class="" action="<?php echo site_url('usuario/registrar'); ?>" method="post" role="form"
        style="width: 50%; margin: 0 auto;  text-align: center">  
     
     
     
        <h2>REGISTRO</h2>
          

            <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>


            <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("message").'</label>';  
                     ?>


        <div class="form-row">
        <div class="form-group col-md-6">
     <label class="sr-only" >Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user"></i></div>
        </div>
     <input type="text" name="nombre" id="name" tabindex="1" class="form-control" placeholder="Nombre" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('nombre'); ?></span>
    </div>
  
            
    <div class="form-group col-md-6">
     <label class="sr-only" >Cédula</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-id-card"></i></div>
        </div>
     <input type="text" name="cedula" id="name" tabindex="1" class="form-control" placeholder="Cédula" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('cedula'); ?></span>
    </div>
  </div>            
        
                  
        <div class="form-row">
  
        <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user"></i></div>
        </div>
     <input type="text" name="username" id="name" tabindex="1" class="form-control" placeholder="Usuario" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('username'); ?></span>
    </div>
            
           


    <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-lock"></i></div>
        </div>
     <input type="password" name="password" id="name" tabindex="1" class="form-control" placeholder="Contraseña" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('password'); ?></span>
    </div>
  </div>            
               
             

  <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-map-marker "></i></div>
        </div>
     <input type="text" name="direccion" id="name" tabindex="1" class="form-control" placeholder="Dirección" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('direccion'); ?></span>
  </div>
                  
  <div class="form-group">
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-at"></i></div>
        </div>
     <input type="text" name="correo" id="name" tabindex="1" class="form-control" placeholder="Correo" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('correo'); ?></span>
  </div>
                  
  <div class="form-row">

 <div class="form-group col-md-6">  
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-phone"></i></div>
        </div>
    <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Teléfono" value="">            
      </div>
     <span class="text-danger"> <?php echo form_error('phone'); ?></span>
                      
                    </div>
      
  
    <div class="form-group col-md-6">
      <select name="sexo" id="input" class="form-control">
          <option selected>Sexo </option>
        <option>  Masculino</option>
            <option>Femenino</option>
      </select>
    </div>
   </div>
            
    <div class="form-row">
   


 <div class="form-group col-md-6">  
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
     <input  id="datepicker"  class="form-control" placeholder=" Fecha de nacimiento"  data-date-format="MM/DD/YYYY" name="date" >         
      </div>
     <span class="text-danger"> <?php echo form_error('phone'); ?></span>
                      
                    </div>
                    
                        
<?php if(isset( $this->session->userdata()['login'])){
 $user_data= ($this->session->userdata()['user']);
    
   
 if($user_data->tipo == "admin" ){
  ?> 
  <div class="form-group col-md-6">
  <select name="tipo" id="input" class="form-control">
      <option selected>Tipo de Usuario </option>
    <option>Asistente</option>
        <option>Paciente</option>
  </select>
</div>
        
<?php } }?>
 

      </div>            
<hr>
                  
 <input type="submit" name="register-submit" 
								id="register-submit" tabindex="4" class=" col-md-4 form-control btn-register btn btn-info" value="Registrar ">
</form>                   
       
   </div>
  
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
       <script src="<?php echo asset_url(); ?>js/datepicker.js" type="text/javascript"> </script>

    </body>
</html>