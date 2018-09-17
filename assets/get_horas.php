<?php
   $data = $_POST['val'];

   $horario= [
     "10:00"
    ,"10:30"
    ,"11:00"
    ,"11:30"
    ,"12:00"
    ,"12:30"
    ,"14:00"
    ,"14:30"
    ,"15:00"
    ,"15:30"
    ,"16:00"
    ,"16:30"
    ,"17:00"
    ,"17:30"
    ,"18:00"
    ,"18:30"
    ,"19:00"
    ,"19:30"];

$horas=[]; 

    $connect = mysqli_connect("localhost", "root", "", "db_clinica");  
    $query =  "SELECT * FROM `cita` WHERE  cita.fecha = '".$data."' AND estado = 'aprobado'";  
    
    $result = mysqli_query($connect, $query);  
   
    while($row = mysqli_fetch_array($result))  
    {  
        array_push($horas,$row['hora']);
      
    }
    $resultado = array_diff($horario, $horas);
  //  var_dump ($resultado);
  foreach ($resultado as $key ) {
    echo '<option value="'.$key.'" >'.$key.'</option> ';
  }


?>