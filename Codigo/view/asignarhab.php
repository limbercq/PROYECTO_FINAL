<div class="col-12">
<?php 
include("controladorasignarhab.php");

 ?>
<h3 class="tipografia_2 text-info">Asignar Habitacion</h3><br>


<div class="card ">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title tipografia_1">Tipo de habitacion: <?php  echo $a->tipo; ?></h5>      
    <ul>
        <li class="list-grop"><span class="text-info">Precio :</span> <?php echo $costo=$a->costo;?> Bs</li>
        <li><span class="text-info">Tipo : </span> <?php echo $tipo=$a->tipo;?></li>
        <li><span class="text-info">Nro Camas :</span> <?php  echo $nroc=$a->nro_camas; ?> </li>  
      </ul>
    </div> 
<div class="card ">
            <!-- <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap"> -->
    <div class="card-body">
    <h5 class="card-title tipografia_1">  Nro habitacion Reservada : <?php echo  $a->codhabitacion; ?></h5>      
    <ul>
        <li class="list-grop"><span class="text-info">NOMBRE : </span> <?php echo $b->nombre;?></li>
        <li><span class="text-info">APELLIDO : </span> <?php echo $b->apellido;?></li>
      </ul>
    </div>          
</div>	
</div>