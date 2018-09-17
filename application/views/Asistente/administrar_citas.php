
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
<br> 
     <div class="form-row">
     <div class="col-md-4 mb-3">    
<h4>Citas pendientes: </h4>
<hr>
</div>
     </div>

 <div class="form-row">

 <div class="col-md-5 mb-3">
 </div>
 <div class="col-md-6">
    <form  class="" action="<?php echo site_url('asistente/verificar_cita'); ?>" method="post" role="form">  
     

         <?php include('utils.php');
          create($citas);?> 
</form>
</div>
</div><!-- end form row -->
</div><!-- end container -->
<br><br>
</body>
</html>