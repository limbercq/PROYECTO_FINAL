<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
    <style type="text/css" media="screen, print">
     @font-face {font-family: Lobster-Regular; src: url(font/Lobster-Regular.ttf);}
    </style>
    <title>Usuario</title>

</head>
<body>
<?php 
       include_once('menu_1.php')
  ?>
  
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title tipografia_1">Habitacion imperial</h5>      
                      <ul>
                        <li class="list-grop"><span class="text-info">Precio :</span> 300 Bs.</li>
                        <li><span class="text-info">Tipo : </span> Matrimonial</li>
                        <li><span class="text-info">Nro Camas :</span> 1</li>
                      </ul> 
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="validationCustom01" class="text-info">Fecha de inicio</label>
                          <input type="date" class="form-control" id="validationCustom01" name="nombre" required disabled>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="text-info">Fecha final</label>
                          <input type="date" class="form-control" id="validationCustom02" name="apellido" required disabled>
                        </div>
                      </div>         
                    </div>
                      <button type="submit" class="btn btn-warning btn-block btn-card">Reprogramar</button>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Usuario
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><span class="text-info">Nombre: </span> Juan Perez </li>
                      <li class="list-group-item"><span class="text-info">Ci : </span> 1616545 </li>
                      <li class="list-group-item"><span class="text-info">Nacionalidad : </span> Boliviano</li>
                      <li class="list-group-item"><span class="text-info">Correo : </span> sdfasd@gmail.com</li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
    <?php 
         include('footer.php')
    ?>
    <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrip.js"></script>
</body>
</html>