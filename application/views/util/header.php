<head>
  
    <meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css">

  <script src="<?php echo asset_url();?>bootstrap/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">

 <link href="https://fonts.googleapis.com/css?family=Muli|Tangerine" rel="stylesheet"> 
 
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/Style.css">
        
  </head>
    

  <header>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #007F7D;">
            <a class="navbar-brand" style="font-size:30px;" href="#">  <img src="<?php echo asset_url(); ?>images/logogray.png"  width="25" height="30" class="d-inline-block align-top" alt="">   Castro y Umaña </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link"  href=<?php echo site_url('main')?>> Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('registro')?>>Registro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('menu')?>>Pacientes </a>
                    </li>


                </ul>
            </div>
        </nav>

  </header>

