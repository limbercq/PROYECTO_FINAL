<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cliente nuevo</title>
</head>
<?php 
session_start();
$_SESSION['ci'];
if(isset($_SESSION['ci'])){
	$ci= $_SESSION['ci'];
include ("conexion.php");
$sql = "SELECT * FROM usuario WHERE ci like '$ci'";
$registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);
$nro=$base->query($sql);
$cliente_new=$nro->rowCount();
}else{
	$_SESSION['ci']="";
	session_start();
	session_destroy();
	$cliente_new=0;
}

 ?>
<body>
	<h1>CLIENTE NUEVO </h1><br>
<?php 
if($cliente_new!=0){
	echo "BIENVENIDO: ";
	 $a=$registro[0];
	echo $ci=$a->ci;
	echo $nombre=$a->nombre;
	echo $apellido=$a->apellido;
	echo $apellido=$a->correo;


echo "<form method='POST'>";
echo "<br>";
echo "<input type='submit' value='CONFIRMAR' name='no'> ";
echo "</form>";
}
else{
echo "ERES NUEVO USUARIO PORFAVOR LLENA EL FORMULARIO PARA REALIZAR TU RESERVA :";
echo "<br>";
echo "<form method='POST'>";
echo "<input type='submit' value='CLIK PARA LLENAR FORMULARIO' name='si'> ";
echo "</form>";
	
}

if($cliente_new==0 and empty($_SESSION['ci'])){
header("Location: motor.php?codFlujo=F1&codProceso=P6");
}

 ?>

</body>
</html>