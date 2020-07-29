
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
 <div class="col-6 text-center">
	<h3 class="tipografia_2 text-info">Cliente Nuevo </h3><br>
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
echo "<input type='submit' class='btn btn-success' value='CONFIRMAR' name='no'> ";
echo "</form>";
}
else{
echo "ERES NUEVO USUARIO PORFAVOR LLENA EL FORMULARIO PARA REALIZAR TU RESERVA :";
echo "<br>";
echo "<form method='POST'>";
echo "<input type='submit' class='btn btn-success' value='CLICK PARA LLENAR FORMULARIO' name='si'> ";
echo "</form>";
	
}

if($cliente_new==0 and empty($_SESSION['ci'])){
header("Location: motor.php?codFlujo=F1&codProceso=P6");
}

 ?>

</div>
<div class="col-6">
    <img src="img/registrar.jpg" alt="Card image cap" class="card-img-top">
</div>