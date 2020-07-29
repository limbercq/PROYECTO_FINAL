
<?php 
include("datoscliente1.php");
 ?>

<?php 
if(isset($_POST['datos_cliente'])){
	session_start();
	 $_SESSION['ci']=$_POST['ci'];
 $_SESSION['nombre']=$_POST['nombre'];
 $_SESSION['apellido']=$_POST['apellido'];
 $_SESSION['nacionalidad']=$_POST['nacionalidad'];
 $_SESSION['emial']=$_POST['emial'];
 $_SESSION['password']=$_POST['password'];
 $_SESSION['nro_tarjeta']=$_POST['nro_tarjeta'];
	 $_SESSION['cvc']=$_POST['cvc'];
	$_SESSION['nom_tarjeta']=$_POST['nom_tarjeta'];
	 $_SESSION['mes']=$_POST['mes'];
	$_SESSION['anno']=$_POST['anno'];

}
// include("controladoringresaDatosRegCli.php");
 ?>
	
