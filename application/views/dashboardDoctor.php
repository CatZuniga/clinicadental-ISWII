<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  
  <body>

  <div class="container-fluid ">
<br><br>

            <div class="search container-fluid ">
                <div class="">
                    <h1>Buscar expediente </h1>
                </div>
        
                <form  action= "<?php echo site_url('doctor/buscar');?>"  method="post" role="form" style="display: block;">
                <div class="form-row">
                <div class="form-group col-md-4">
     <label class="sr-only" >Cédula</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-id-card"></i></div>
        </div>
     <input type="text" name="cedula" id="name" tabindex="1" class="form-control" placeholder="Cédula" value="">           
      </div>
     <span class="text-danger"> <?php echo form_error('cedula'); ?></span>
    
    </div> <div class="form-group col-md-2">
  
<input type="submit" name="buscar"  tabindex="4" class="form-control fa btn btn-info btn-lg" value="&#xf002; Buscar">           


</div>
</div>
 <?php     echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';    ?>
         
</form>

            </div>  
<hr>

  <h3>Pacientes </h3> 
  <div class="container-fluid " style="margin-bottom:8%;">
   <div class="form-row row justify-content-md-center">
        <div class="form-group  ">

                <form  action= "<?php echo site_url('doctor/action');?>" method="post" role="form" style="display: block;">

                    <table class="table table-responsive table-bordered table-hover ">

        <thead>
          <tr>
          <th>Nombre</th>
            <th>Cédula</th>
            <th>Perfil</th>
            <th>Expediente Médico</th>
            <th>Expediente Dental</th>
          </tr>
        </thead>
        <tbody>
        <?php 
    include('utils.php');
  createTable($pacientes);
 // createModal();

 // <a href="<?php echo site_url('user/create')*?<*">Create User</a>?>
            
        </tbody>
   
                    </table>
</form>
</div>  

</div>  
</div>
   </div>  


   <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-login">
 
         <div class="modal-content" > 
     
			<div class="modal-body" id="datos">
               
         </div>
         
         <div class="modal-footer">  
                   <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
              </div> 
          </div>  
    </div>  
</div>  

     <script src="<?php echo asset_url(); ?>js/modals.js" type="text/javascript"> </script>
   
    </body>
</html>