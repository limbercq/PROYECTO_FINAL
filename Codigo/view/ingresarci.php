<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>elegirhab</title>
</head>
<?php 
session_start();
if(!empty($_SESSION['codhab'])){
	$codhab=$_SESSION['codhab'];
}else{
	// header("Location:motor.php?codFlujo=F1&codProceso=P4");
}

 ?>
<body>
	<h1>INGRESAR CI </h1><br>
	<form action="" method="post">
		<label for="ci">CI: </label>
		<input type="text" name="ci" id="ci" required>
		
		<input type="submit" value="ENVIAR" name="enviar">
	</form>
<?php 

if(isset($_POST["enviar"])){
	$ci=$_POST["ci"];
	include ("conexion.php");
	
	$sql = "SELECT * FROM usuario WHERE ci ='$ci'";
	$nro=$base->query($sql);
	$cliente_new=$nro->rowCount();
	echo ": ".$ci=$_POST["ci"];
	$_SESSION['ci']=$ci;

}else{
	echo "INGRESE CI ";
}

 ?>
</body>
</html>