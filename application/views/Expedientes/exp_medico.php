
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">



<?php  
$tratamiento ="";
$alergias = "";
$sangrado ="";
$diabetes ="";
$medicamentos="";
$otro ="";

foreach ($antecedentes as $antecedente) {

switch ($antecedente['nombre']) {
    case 'sangrado':
    $sangrado = $antecedente['detalle'];
        break;
    case 'alergias':
    $alergias = $antecedente['detalle'];
        break;
    case 'tratamiento':
    $tratamiento = $antecedente['detalle'];
        break;
    case 'diabetes':  
    $diabetes = $antecedente['detalle'];  
    break;
    case 'medicamentos':
    $medicamentos = $antecedente['detalle'];
    break;
    case 'otro':
    $otro = $antecedente['detalle'];
    break;
}

}



       ?>

  <div class="container-fluid wrap">
  <h3>Expediente médico  </h3>
<h5>Antecedentes clínicos:  <?php echo($exp_medico->nombre);  ?>  </h5> 
<h6>Número expediente de salud : <?php echo($exp_medico->num_exp_salud);  ?></h6>
<hr>
        
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">

    <form  action= "<?php echo site_url('doctor/updateExpMedico');?>/<?php echo($exp_medico->id_exp_medico); ?>"  method="post" role="form" style="display: block; " >
  
    <input type="text" style="display:none;" name="id_usuario" value="<?php echo($exp_medico->id_usuario); ?>" >
 
   <!--   <?php  
            echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  

       ?> -->
 

 <div class="form-row">        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox"name="check[]" class="custom-control-input" id="customCheck1" value="tratamiento">
<label class="custom-control-label" for="customCheck1">En tratamiento médico</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="Detalles" name="tratamiento" rows="2" value=""> <?php echo($tratamiento);  ?></textarea>
</div>  
</div>
        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]"  class="custom-control-input" id="customCheck2" value="diabetes">
<label class="custom-control-label" for="customCheck2">Diabetes</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" name="diabetes" rows="2" value=""  > <?php echo($diabetes);  ?></textarea>
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
<textarea class="form-control"  placeholder="" name="alergias" rows="2"> <?php echo($alergias);  ?>  </textarea>
</div>  
</div>
        
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox"name="check[]" class="custom-control-input" id="customCheck4" value="sangrado">
<label class="custom-control-label" for="customCheck4">Sangrado prologado</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" name="sangrado" rows="2"> <?php echo($sangrado);  ?> </textarea>
</div>  
</div>
</div>         

    <div class="form-row">      
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]" class="custom-control-input" id="customCheck5" value="medicamentos">
<label class="custom-control-label" for="customCheck5">Toma de medicamentos</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" rows="2" name="medicamentos"> <?php echo($medicamentos);  ?> </textarea>
</div>  
</div>
                                  
<div class="col-lg-6">
<div class=" custom-control custom-checkbox"> 
<input type="checkbox" name="check[]" class="custom-control-input" id="customCheck6" value="otro">
<label class="custom-control-label" for="customCheck6">Otro padecimiento (indique)</label>   
</div>
<div class="  form-group">
<textarea class="form-control"  placeholder="" rows="2" name="otro"> <?php echo($otro);  ?></textarea>
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



    </body>
</html>