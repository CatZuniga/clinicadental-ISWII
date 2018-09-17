<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.2/combined/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.2/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php 
// var_dump($paciente);
 
 ?>   

<div class="container">
        <br>
        <h2>Expediente dental : <?php echo($exp_dental->nombre);  ?></h2>
        <div class="form-row  row justify-content-md-end">
        <a class="btn btn-info col-4" href=<?php echo site_url('odontograma/index')?>>Odontograma </a>
        </div>
        <hr>
        <form action="<?php echo site_url('expediente/save_estado_pieza');?>/<?php echo($exp_dental->id_exp_dental);?>" method="post" role="form" style="display: block;">
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <h3 class="text-secondary">Estado de la pieza</h3>
                    <br>
                </div>
                <div class="col-md-2 mb-3">
                    <select name="pieza_46" class="form-control  form-group">
                          <option selected>Pieza 46</option>
                          <option>Sana</option>
                          <option>Sellada</option>
                          <option>Cariada</option>
                          <option>Obturada</option>
                          <option>Perdida</option>
                    </select>

                    <select name="pieza_85" class="form-control form-group">
                          <option selected>Pieza 85</option>
                          <option>Sana</option>
                          <option>Sellada</option>
                          <option>Cariada</option>
                          <option>Obturada</option>
                          <option>Perdida</option>
                    </select>

                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login btn btn-info" value="Agregar">
                </div>
                </form>
                <div class="col-md-1 mb-3"></div>

                <div class="col-md-5 mb-3">
                <form  action="<?php echo site_url('expediente/action');?>/<?php echo($exp_dental->id_exp_dental);?>" method="post" role="form" style="display: block;">
                  <table class="table table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">85</th>
                                <th scope="col">46</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
    include('utils.php');
 createTable_estado($estado_pieza);

        ?>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
      

        <hr>

        <form  action="<?php echo site_url('expediente/save_alteracion');?>/<?php echo($exp_dental->id_exp_dental);?>" method="post" role="form" style="display: block;">

            <div class="form-row">
                <div class="col-md-3 mb-3">

                    <h3 class="text-secondary">Alteración en planos</h3>
                    <br>


                </div>
                <div class="col-md-2 mb-3">
                    <select name="alt_46" class="form-control  form-group">
          <option selected>Pieza 46</option>
        <option>No califica</option>
            <option>Sagital</option>
          <option>Horizontal</option>
            <option>Lateral</option>
          <option>Apiñamiento</option>
            
      </select>


                    <select name="alt_85" class="form-control form-group">
          <option selected>Pieza 85</option>
        <option>No califica</option>
            <option>Sagital</option>
          <option>Horizontal</option>
            <option>Lateral</option>
          <option>Apiñamiento</option>
      </select>


                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login btn btn-info" value="Agregar">


                </div>

                 </form>
                <div class="col-md-1 mb-3"></div>
                <div class="col-md-5 mb-3">
                <form  action="<?php echo site_url('expediente/action');?>/<?php echo($exp_dental->id_exp_dental);?>" method="post" role="form" style="display: block;">
                    <table class="table table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">85</th>
                                <th scope="col">46</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
  
 createTable_alteracion($alteracion);

        ?>
                        </tbody>
                    </table>
                    </form>
                </div>

            </div>

       


        <hr>

        <div class="form-row">
            <h3  class="text-secondary" >Estado Peridontal</h3>
        </div>

        <form action="<?php echo site_url('expediente/save_estado_peridontal');?>/<?php echo($exp_dental->id_exp_dental);?>" method="post" role="form" style="display: block;">

            <div class="form-row">
                <div class="col-md-2 mb-3">



                    <ul class="list-group">
                        <li class="list-group-item"><span class="font-weight-bold">0 </span>Higiénico</li>
                        <li class="list-group-item"><span class="font-weight-bold">1 </span>sangrado</li>
                        <li class="list-group-item"><span class="font-weight-bold">2 </span>Cálculo</li>
                        <li class="list-group-item"><span class="font-weight-bold">3 </span>Bolsa 4.5 mm</li>
                        <li class="list-group-item"><span class="font-weight-bold">4 </span>Bolsa 6mm</li>
                        <li class="list-group-item"><span class="font-weight-bold">X </span>Sextante nulo</li>
                    </ul>

                </div>
                <div class="col-md-1 mb-3">
                </div>
                <div class="col-md-1 mb-3">

                    <label class="small"> 17/16</label>
                    <input type="text" name="17" maxlength="1" pattern="[0-4]" required id="name" tabindex="1" class="form-control" placeholder="" value="">
                    <label class="small"> 11</label>
                    <input type="text" name="11" maxlength="1" id="name" tabindex="1" class="form-control" placeholder="" value="">
                    <label class="small"> 26/27</label>
                    <input type="text" name="26" maxlength="1" id="name" tabindex="1" class="form-control" placeholder="" value="">
                </div>

                <div class="col-md-1 mb-3">


                    <label class="small"> 36/37</label>
                    <input type="text" name="36" id="name" maxlength="1" tabindex="1" class="form-control" placeholder="" value="">
                    <label class="small"> 31</label>
                    <input type="text" name="31" id="name" maxlength="1" tabindex="1" class="form-control" placeholder="" value="">
                    <label class="small"> 47/46</label>
                    <input type="text" name="47" id="name" maxlength="1" tabindex="1" class="form-control" placeholder="" value="">

                    <br>
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login btn btn-info" value="Agregar">


                </div>

                
        </form>
                <div class="col-md-1 mb-3">
                </div>
                <div class="col-md-5 mb-3">
                <form  action="<?php echo site_url('expediente/action');?>" method="post" role="form" style="display: block;">
                    <table class="table table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">17/16</th>
                                <th scope="col">11</th>
                                <th scope="col">26/27</th>
                                <th scope="col">36/37</th>
                                <th scope="col">31</th>
                                <th scope="col">47/46</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
  
  createTable_peridontal($peridontal);
 
         ?>
                        </tbody>
                    </table>
</form>
                </div>

            </div>



        <hr>
    </div>

<br>
<hr>




    </body>
</html>