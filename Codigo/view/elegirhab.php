<div class="col-12">
	<h1>elegir habitacion</h1><br>
<?php 
session_start();
include ("conexion.php");
$sql = "SELECT DISTINCT tipo,costo,nro_camas FROM habitacion";
$registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
<div class="card-deck">
<?php 
    foreach ($registro as $hab):?>	
    <div class='col-md-3  p-0 pb-3'>
        <div class="card ">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title tipografia_1">Habitacion <?php  echo $hab->tipo; ?></h5>      
              <ul>
                <li class="list-grop"><span class="text-info">Precio :</span> <?php echo $costo=$hab->costo;?> Bs</li>
                <li><span class="text-info">Tipo : </span> <?php echo $tipo=$hab->tipo;?></li>
                <li><span class="text-info">Nro Camas :</span> <?php  echo $nroc=$hab->nro_camas; ?> </li>
                
              </ul>        
            </div>
           <div class="card-footer">
           
        <form action="" method="post">
    		  <input type="hidden" value="<?php echo $tipo ?>" name="tipo">
    		  <input type="submit" value="RESERVAR" class="btn btn-success btn-block" name="reservar">
        </form>
           </div> 
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php
    if(isset ($_POST['reservar']))
    { 
        $tipo=$_POST["tipo"];
        echo  $tipo;
        
        $_SESSION['tipo'] = $tipo;

    }
         
?>
</div>