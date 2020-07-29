<div class="col-12">
	
<?php 
 session_start();
if(isset($_SESSION['fini']) or isset($_SESSION['fnal'])){
	$fecha_inicial=$_SESSION['fini'];
	$fecha_final=$_SESSION['fnal'] ;
	$tipo=$_SESSION['tipo'];
	$sql="SELECT * 
    FROM habitacion
    WHERE codhabitacion not in (SELECT r.codhab
    FROM reserva r ,habitacion h
    WHERE ('$fecha_inicial'>=r.fecha_ingreso
    and '$fecha_inicial'<r.fecha_salida)
    and h.codhabitacion=r.codhab
    and h.tipo like'$tipo')
    and tipo like '$tipo' and estado=0";

    $registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);
    $nro=$base->query($sql);
    $n=$nro->rowCount();
}else{
	$n=0;
	echo "PORFAVOR INGRESA LA FECHA EN QUE DESEA RESERVAR";
}
 ?>
	<h3 class="tipografia_2 text-info">consultar si hay habitacion libre para esa fecha </h3>
	
	<form method="POST">
        <input type="submit" class="btn btn-info" value="MOSTRAS OTRAS OPCIONES" name="no"> 
    </form>	
	<div class="card-deck">
	
	<?php if($n>0) foreach ($registro as $hab):  ?>
		<div class='col-md-3  p-0 pb-3'>
    	<div class="card ">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
	    	<div class="card-body">
	   		 <h5 class="card-title tipografia_1">Habitacion <?php  echo $codhab=$hab->codhabitacion; ?></h5>      
	    	<ul>
	        <li class="list-grop"><span class="text-info">Precio :</span> <?php echo $hab->costo;?> Bs</li>
	        <li><span class="text-info">Tipo : </span> <?php echo $hab->tipo;?></li>
	        <li><span class="text-info">Nro Camas :</span> <?php  echo $hab->nro_camas; ?> </li>  
	      	</ul> 
	      	</div> 
			  <div class="card-footer">
			  
			  <form action="" method="post">
				<input type="hidden" value="<?php echo $codhab; ?>" name="codhab">
				<input type="submit" class="btn btn-success" value="RESERVA ESTA HABITACION" name="si">     
			</form>
		</div>
	     </div>
	</div>
	<?php endforeach;?>
<?php
	 if(isset($_POST['si']))
    { 
        //AQUI DAR ESTILO POR SI DA ASIGNAR
        echo $codhab=$_POST["codhab"];
        $_SESSION['codhab'] = $codhab;
    }

    if(isset($_POST['no'])){
			session_destroy();
			// header("Location:motor.php?codFlujo=F1&codProceso=P5");
    }
   
	
	 ?>
</div>