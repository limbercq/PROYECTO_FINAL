<div class="col-6">
<?php 

include ("controladorelegirfecha.php");

 ?>
<div class="card ">
            <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title tipografia_1">Habitacion <?php  echo $a->tipo; ?></h5>      
    <ul>
        <li class="list-grop"><span class="text-info">Precio :</span> <?php echo $costo=$a->costo;?> Bs</li>
        <li><span class="text-info">Tipo : </span> <?php echo $tipo=$a->tipo;?></li>
        <li><span class="text-info">Nro Camas :</span> <?php  echo $nroc=$a->nro_camas; ?> </li>  
      </ul>
    </div>        
</div>
</div>
<div class="col-6 text-center">
<h3 class="tipografia_2 text-info">Elegir fecha de reserva </h3><br>
<div class="col-8">
	<form action="" method="post">
		<label for="fini">FECHA INICIAL</label>
		<input class="form-control" type="date" name="fini" >
		<label for="fnal">FECHA final</label>
		<input class="form-control" type="date" name="fnal" >
		<input type="hidden" name="tipo" value="<?php echo $tipo ?>" >
		<input type="submit" class="btn btn-success mt-2" value="CONSULTAR" name="consultar">
	</form>
</div>

<?php 

if(isset ($_POST['consultar']))
{ 
        $fecha_inicial=$_POST["fini"];
        $fecha_final=$_POST["fnal"];
  
        $_SESSION['fini'] = $fecha_inicial;
        $_SESSION['fnal'] = $fecha_final;


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
    if($n>0){
        echo "si hay habitaciones disponobles para la fecha : ".$fecha_inicial." al : ".$fecha_final;
    }else{
        echo "no hay habitaciones disponibles del: ".$tipo." para la fecha :".$fecha_inicial." al : ".$fecha_final;
    }
    
}

 ?>
 </div>