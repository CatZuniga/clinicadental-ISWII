<?php  

 $data = key($_POST);

   $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "db_clinica");  
      $query =  "SELECT * FROM `perfil` INNER JOIN `usuario` ON perfil.id_usuario =usuario.id WHERE perfil.id_usuario = '".$data."'";  
      
      $result = mysqli_query($connect, $query);  
     
      while($row = mysqli_fetch_array($result))  
      {  
      
           $output = '  
        
         <div class="modal-body container-fluid ">
         <div class="row ">
         <div class="col-12 ">
   
         <h4 class=""> '.$row["nombre"].'</h4>	
         <hr>
         </div>
      
       <div class="col-12 ">
                  <div class="form-group">
                  <label>
                  <label class="font-weight-bold text-secondary"><i class="fa fa-id-card"></i> Cédula:  </label>
                    <label id="fullname"> '.$row["cedula"].'  </label>
                    </div>       
                  
                      <div class="form-group">
                      <label class="font-weight-bold text-secondary"><i class="fa fa-phone"></i> Teléfono:  </label>
                   <label id="speed"> '.$row["telefono"].' </label> 
                    </div>
                        
                        
                    <div class="form-group">
                    <label class="font-weight-bold text-secondary"><i class="fa fa-transgender"></i> Sexo:  </label>
                    <label id="phone">  '.$row["sexo"].' </label>
                    </div>
                   
                    <div class="form-group">
                    <label class="font-weight-bold text-secondary"><i class="fa fa-calendar"></i> Fecha nacimiento:  </label>
                    <label id="about"> '.$row["fecha_nacimiento"].'  </label>
                  </div>
                  <div class="form-group">
                  <label class="font-weight-bold text-secondary"><i class="fa fa-map-marker "></i> Dirección:  </label>
                  <label id="about"> '.$row["direccion"].'  </label>
                </div>
                <div class="form-group">
                <label class="font-weight-bold text-secondary"><i class="fa fa-at"></i> Correo:  </label>
                <label id="about"> '.$row["correo"].'  </label>
              </div>





                  </div>
                  </div>
                ';  
      }  
      $output .= "</div>";  
      echo $output;  
   
 ?>
