
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<head>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>



<body>
<div class="container">

<br><br>
      <div class="form-group d-flex justify-content- col-md-6">
       <h3><?php echo($paciente->nombre); ?></h3> 
    </div>

  <div class="form-group d-flex justify-content- col-md-6">
    
  <div class="alert alert-secondary" role="alert">
  <hr>
  Recuerde solicitar la cita que desea con al menos un día de anticipación .
  Horario de atención: Lunes a Viernes de 10AM a 7PM.
  <hr>

</div>
    </div>



    <form  class="" action="<?php echo site_url('paciente/save_cita'); ?>" method="post" role="form">  
     

         <?php
                   echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                                                ?> 


 <div class="form-row">
   


   <div class="form-group col-md-6">  
   <label for="">Indique la fecha en la que desea ser atendido </label>
       <div class="input-group">
      
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
       <input  id="datepicker"  class="form-control" placeholder=""  data-date-format="YYYY-MM-DD" name="fecha_cita" >         
        </div>
       <span class="text-danger"> <?php echo form_error('fecha_cita'); ?></span>
                        
                      </div>
                      </div>
 <div class="form-row">


   <div class="form-group col-md-6">  
   <label for="">Horario disponible </label>
       <div class="input-group">
      
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
          </div>
          <select  id="horas" class="form-control" name="hora"></select>        
        </div>
       <span class="text-danger"> <?php echo form_error('hora'); ?></span>
                               
                      </div>

   </div>




 <input type="submit"  class="  btn btn-info" value="Aceptar"> 

</form>
</div><!-- end container -->

   <script>
   var date;
   var  url= 'http://localhost/clinica/assets/get_horas.php';
$(function () {

    $.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd'
    });
    $("#datepicker").datepicker({
        beforeShowDay: $.datepicker.noWeekends,
        minDate: 0,
        onSelect: function(dateText, inst) { 
        $.post(url, 'val='+dateText, function (response) {
          $("#horas").html(response);
        });
      }
    });

});


   //     $('#datepicker').click(function(){ 
            
          //  var id = $(this).attr("id");  
    //        console.log( ".---");  console.log(date ); 
          
           // var  url= 'http://localhost/ticorides/assets/getride.php';
         // submitStates(url,id);
   
  //      });  

  </script>




       <script src="<?php echo asset_url(); ?>js/datepicker.js" type="text/javascript"> </script>

</body>
</html>