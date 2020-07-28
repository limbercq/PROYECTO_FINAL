<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ASIGNAR HABITACION</title>
</head>
<body>
<?php 
include("controladorasignarhab.php");

 ?>
<h1>ASIGNAR HABITACION</h1><br>


<div class="card ">
            <!-- <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap"> -->
    <div class="card-body">
    <h5 class="card-title tipografia_1">TIPO DE HABITACION: <?php  echo $a->tipo; ?></h5>      
    <ul>
        <li class="list-grop"><span class="text-info">Precio :</span> <?php echo $costo=$a->costo;?> Bs</li>
        <li><span class="text-info">Tipo : </span> <?php echo $tipo=$a->tipo;?></li>
        <li><span class="text-info">Nro Camas :</span> <?php  echo $nroc=$a->nro_camas; ?> </li>  
      </ul>
    </div> 
<div class="card ">
            <!-- <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap"> -->
    <div class="card-body">
    <h5 class="card-title tipografia_1">  NRO HABITACION RESERVADA : <?php echo  $a->codhabitacion; ?></h5>      
    <ul>
        <li class="list-grop"><span class="text-info">NOMBRE DE : </span> <?php echo $b->nombre;?> Bs</li>
        <li><span class="text-info">APELLIDO : </span> <?php echo $b->apellido;?></li>
      </ul>
    </div>          
</div>	
</body>
</html>