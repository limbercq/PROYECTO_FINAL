
<?php 
session_start();
if(!empty($_SESSION['codhab'])){
	$codhab=$_SESSION['codhab'];
}else{
	// header("Location:motor.php?codFlujo=F1&codProceso=P4");
}

 ?>
 <div class="col-6">
	<h3 class="tipografia_2 text-info">Ingresar CI </h3><br>
	<form action="" method="post">
	<div class="input-group mb-3">
	<div class="input-group-append">
			<span class="input-group-text" id="basic-addon2">C.I.</span>
		</div>
		<input type="text" class="form-control"  name="ci" id="ci">
		<div class="input-group-append">
			<input type="submit" class="btn btn-success" value="ENVIAR" name="enviar">	
		</div>
	</div>
	</form>
<?php 

if(isset($_POST["enviar"])){
	$ci=$_POST["ci"];
	include ("conexion.php");
	
	$sql = "SELECT * FROM usuario WHERE ci ='$ci'";
	$nro=$base->query($sql);
	$cliente_new=$nro->rowCount();
	echo "Carnet ingresado : ".$ci=$_POST["ci"];
	$_SESSION['ci']=$ci;

}else{
	echo "INGRESE CI ";
}

 ?>
 
 </div>
 <div class="col-6">
    <img src="img/buscar.webp" alt="Card image cap" class="card-img-top">
</div>