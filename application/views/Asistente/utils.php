<?php

function create($citas){

	foreach($citas as $cita){

     echo '  <div class="alert alert-secondary" role="alert">
     <h5>'.$cita['nombre'].'</h5>    
     <hr>   
     <label class="font-weight-bold" for="">Fecha:</label> <span>'.$cita['fecha'].' </span>
     
     <label  class="font-weight-bold" for="">Hora:</label> <span>'.$cita['hora'].' </span>
     <div class="  form-row  row justify-content-md-end">
     <input type="submit"  name="aprobar['.$cita['id_cita'].']" value="&#xf14a; Aprobar" class="fa btn-info btn" />	
     <input type="submit"  name="declinar['.$cita['id_cita'].']" value="&#xf146; Declinar" class="fa btn-dark btn" />	
            </div>

            </div>
       '; 
}	
}

?>