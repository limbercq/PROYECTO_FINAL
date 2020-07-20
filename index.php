<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css" media="screen, print">
     @font-face {font-family: Lobster-Regular; src: url(font/Lobster-Regular.ttf);}
    </style>
</head>
<body>
  <?php 
       include_once('menu_1.php')
  ?>
  <div class="container-fluid">
    <div class="row">
      <!-- Carrusel -->
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/2.jpg" class="img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/3.jpg" class="img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/4.jpg" class="img-fluid w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- Habiataciones Disponibles -->
      <div class="col-12" id="habitacines">
        <h1 class="tipografia_1 mt-4 fw-50">Habiataciones Disponibles</h1>
        <div class="card-deck">
          <!-- Repetir Habitaciones Disponibles -->
          <div class="col-md-4  p-0 pb-3">
          <div class="card mx-3">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tipografia_1">Habitacion imperial</h5>      
              <ul>
                <li class="list-grop"><span class="text-info">Precio :</span> 300 Bs.</li>
                <li><span class="text-info">Tipo : </span> Matrimonial</li>
                <li><span class="text-info">Nro Camas :</span> 1</li>
              </ul>        
            </div>
              <a href="reserva.php" class="btn btn-info btn-block btn-card">Reservar</a>
          </div>
          </div>
          <!-- Fin Repetir Habitaciones Disponibles -->
          <!-- Repetir Habitaciones Disponibles -->
          <div class="col-md-4  p-0 pb-3">
          <div class="card mx-3">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tipografia_1">Habitacion imperial</h5>      
              <ul>
                <li class="list-grop"><span class="text-info">Precio :</span> 300 Bs.</li>
                <li><span class="text-info">Tipo : </span> Matrimonial</li>
                <li><span class="text-info">Nro Camas :</span> 1</li>
              </ul>        
            </div>
              <a href="reserva.php" class="btn btn-info btn-block btn-card">Reservar</a>
          </div>
          </div>
          <!-- Fin Repetir Habitaciones Disponibles -->
          <!-- Repetir Habitaciones Disponibles -->
          <div class="col-md-4  p-0 pb-3">
          <div class="card mx-3">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tipografia_1">Habitacion imperial</h5>      
              <ul>
                <li class="list-grop"><span class="text-info">Precio :</span> 300 Bs.</li>
                <li><span class="text-info">Tipo : </span> Matrimonial</li>
                <li><span class="text-info">Nro Camas :</span> 1</li>
              </ul>        
            </div>
              <a href="reserva.php" class="btn btn-info btn-block btn-card">Reservar</a>
          </div>
          </div>
          <!-- Fin Repetir Habitaciones Disponibles -->
          <!-- Repetir Habitaciones Disponibles -->
          <div class="col-md-4  p-0 pb-3">
          <div class="card mx-3">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tipografia_1">Habitacion imperial</h5>      
              <ul>
                <li class="list-grop"><span class="text-info">Precio :</span> 300 Bs.</li>
                <li><span class="text-info">Tipo : </span> Matrimonial</li>
                <li><span class="text-info">Nro Camas :</span> 1</li>
              </ul>        
            </div>
              <a href="reserva.php" class="btn btn-info btn-block btn-card">Reservar</a>
          </div>
          </div>
          <!-- Fin Repetir Habitaciones Disponibles -->
          
        </div>
      </div>
    </div>             
    <?php 
         include('footer.php')
    ?>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>