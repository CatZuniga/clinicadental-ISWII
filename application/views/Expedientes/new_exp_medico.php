<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    
  <body>
<br>
  <div class="container-fluid wrap">

  <form id="login-form"  action= "<?php echo site_url('doctor/saveExp_medico');?>"  method="post" role="form" style="display: block; " >
   
<h3>Expediente médico :  <?php echo($paciente[0]->nombre);  ?>  </h3>
<h5>Antecedentes clínicos </h5> 
<label>Número expediente de salud :</label> <input type="text" class="form-control col-4"  name="num_exp_salud" value=" " >
<hr>
        
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">


 <input type="text" style="display:none;" name="id_usuario" value="<?php echo($paciente[0]->id_usuario); ?>" >
 
  
      <?php  
            echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';   ?>

 <div class="form-row">        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox"name="check[]" class="custom-control-input" id="customCheck1" value="tratamiento">
<label class="custom-control-label" for="customCheck1">En tratamiento médico</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="Detalles" name="tratamiento" rows="2"></textarea>
</div>  
</div>
        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]"  class="custom-control-input" id="customCheck2" value="diabetes">
<label class="custom-control-label" for="customCheck2">Diabetes</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" name="diabetes" rows="2"></textarea>
</div>  
</div>
        
<div class="form-row">            
        
</div>            
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]"  class="custom-control-input" id="customCheck3" value="alergias">
<label class="custom-control-label" for="customCheck3">Alergias</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" name="alergias" rows="2"></textarea>
</div>  
</div>
        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox"name="check[]" class="custom-control-input" id="customCheck4" value="sangrado">
<label class="custom-control-label" for="customCheck4">Sangrado prologado</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" name="sangrado" rows="2"></textarea>
</div>  
</div>
</div>         

    <div class="form-row">      
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]" class="custom-control-input" id="customCheck5" value=" medicamentos">
<label class="custom-control-label" for="customCheck5">Toma de medicamentos</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" rows="2" name="medicamentos"></textarea>
</div>  
</div>
                                  
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]" class="custom-control-input" id="customCheck6" value="otro">
<label class="custom-control-label" for="customCheck6">Otro padecimiento (indique)</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" rows="2" name="otro"></textarea>
</div>  
</div>
   </div>       
        
        
         <div class="col-lg-6">
      
        
        
         </div>  
        
<hr>

   
   <div class="row justify-content-end">
    <div class="col-4">
    <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-info" value="Guardar">
    </div>
            
      </div>

             
     
    </form>
        </div>                                          
  </div>
                           
</div>





  <div class="container-fluid ">
<br><br>

            <div class="search container-fluid ">
             
        
                <form  action= "<?php echo site_url('doctor/buscar');?>"  method="post" role="form" style="display: block;">
              
   
</form>

            </div>  
            

 



<br>
<hr>


   <div class="form-row row justify-content-md-center">
        <div class="form-group  ">

                <form  action= "<?php echo site_url('doctor/action');?>"  method="post" role="form" style="display: block;">

</form>
</div>  
</div>  
   </div>  
 
    </body>
</html>