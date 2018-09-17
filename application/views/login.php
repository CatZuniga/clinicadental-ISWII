<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli|Tangerine" rel="stylesheet"> 
  
  <script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo asset_url();?>bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css">


  <!-- Required meta tags 

    <link href="https://fonts.googleapis.com/css?family=Muli|Tangerine" rel="stylesheet"> 
    
  

   * <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    *<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   * <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   -->


      
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/Style.css">
        
  </head>
    

<body>

  
  
  <div class="container-fluid " style= "text-align: center; margin-top: 3%;">

  
                <div class=" form-row justify-content-center">
                <div class="align-self-center">

                <img class=" align-self-center " style="width:6rem; margin:%; " src="<?php echo asset_url(); ?>images/logo.png"  alt="">
                <h1 class="brand font-weight-bold">Castro & Umaña</h1>
                <h2 class="brand2 font-weight-bold" >Clínica dental </h2>
                </div>
                </div>
<br>
                
                <div class="row justify-content-center">
                <div class="col-6 ">
            <form id="login-form" action="<?php echo site_url('user/login_validation');?>" method="post" role="form" >
                        <h3 class="font-weight-light text-secondary">Iniciar Sesión</h3>
           <?php
                                                        echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                                                ?> 
                        <div class="">
                            <label class="sr-only">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>
                                <input type="text" name="usernameLogin" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                            </div>
                            <span class="text-danger"> <?php echo form_error('username'); ?></span>
                        </div>
                        <br>
                        <div class="">
                            <label class="sr-only">Contraseña</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-lock"></i></div>
                                </div>
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" value="">
                            </div>
                            <span class="text-danger"> <?php echo form_error('password'); ?></span>
                        </div>
                        <hr>
                        <div style="width: 80%; padding-left: 20%;">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login btn btn-info" value="Ingresar">
                        </div>
                      
                    </form>
                    </div>
                </div> 
           
      </div>


    

    <footer class="footer">
        <p>© Copyright 2018 Clínica Dental - Todos los Derechos Reservados</p>
    </footer>

</body>
</html>
