<?php 

// session_start();
$codhab=$_SESSION['codhab'];
$fecha_inicial=$_SESSION['fIngreso'];
$fecha_final=$_SESSION['fSalida'];
if(empty($fecha_inicial) or empty($fecha_final)){
	header("Location: motor.php?codFlujo=F3&codProceso=P1");
}

if(isset($_POST['registro_cliente'])){
	echo "REGISTRO CON EXITO:";
	// $ci=$_POST['ci'];
	// $nombre=$_POST['nombre'];
	// $apellido=$_POST['apellido'];
	// $nacionalidad=$_POST['nacionalidad'];
	// echo $correo=$_POST['emial'];
	// echo $password=$_POST['password'];
	// echo $nrot=$_POST['nro_tarjeta'];
	// echo $cvc=$_POST['cvc'];
	// echo $nomt=$_POST['nom_tarjeta'];
	// echo $mes=$_POST['mes'];
	// echo $anno=$_POST['anno'];

$estado_sw=false;
$res=0;
include("conexion.php");
	$consultaSql1="INSERT INTO usuario values(:CI,:Nom,:Ape,:Nac,:Correo,:pass)";
	
	$consultaSql4="INSERT INTO tarjeta VALUES(:nro_tarjeta,:cvc,:nomt,:mes,:anno,:ci)";

	$ans1=$base->prepare($consultaSql1);
	$ans1->execute(array(":CI"=>$ci,":Nom"=>$nombre,":Ape"=>$apellido,":Nac"=>$nacionalidad,":Correo"=>$correo,":pass"=>$password));

	$ans4=$base->prepare($consultaSql4);
	$ans4->execute(array(":nro_tarjeta"=>$nrot,":cvc"=>$cvc,":nomt"=>$nomt,":mes"=>$mes,":anno"=>$anno,":ci"=>$ci));

}

 ?>