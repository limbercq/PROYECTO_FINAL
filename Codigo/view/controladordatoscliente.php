<?php 
// echo $ci=$_SESSION['ci'];
$codhab=$_SESSION['codhab'];
$fecha_inicial=$_SESSION['fini'];	
$fecha_final=$_SESSION['fnal'];


if(isset($_POST['datos_cliente'])){
	echo "REGISTRO CON EXITO:";
	echo $ci=$_POST['ci'];
	echo $nombre=$_POST['nombre'];
	echo $apellido=$_POST['apellido'];
	echo $nacionalidad=$_POST['nacionalidad'];
	echo $correo=$_POST['emial'];
	echo $password=$_POST['password'];
	echo $nrot=$_POST['nro_tarjeta'];
	echo $cvc=$_POST['cvc'];
	echo $nomt=$_POST['nom_tarjeta'];
	echo $mes=$_POST['mes'];
	echo $anno=$_POST['anno'];
$_SESSION['ci']=$ci;
$estado_sw=false;
$res=0;

include("conexion.php");

	$consultaSql1="INSERT INTO usuario values(:CI,:Nom,:Ape,:Nac,:Correo,:pass)";
	$consultaSql2="INSERT INTO huesped VALUES(:ci,:nrot,:estado)";
	$consultaSql3="INSERT INTO cliente VALUES(:Ci,:Nrot)";
	$consultaSql4="INSERT INTO tarjeta VALUES(:nro_tarjeta,:cvc,:nomt,:mes,:anno,:ci)";
	$consultaSql5="INSERT INTO reserva VALUES(:f_ini,:f_nal,:sw,:ci,:codhab)";

	$ans1=$base->prepare($consultaSql1);
	$ans1->execute(array(":CI"=>$ci,":Nom"=>$nombre,":Ape"=>$apellido,":Nac"=>$nacionalidad,":Correo"=>$correo,":pass"=>$password));


	$ans2=$base->prepare($consultaSql2);
	$ans2->execute(array(":ci"=>$ci,":nrot"=>$nrot,":estado"=>$estado_sw));

	$ans3=$base->prepare($consultaSql3);
	$ans3->execute(array(":Ci"=>$ci,":Nrot"=>$nrot));

	$ans4=$base->prepare($consultaSql4);
	$ans4->execute(array(":nro_tarjeta"=>$nrot,":cvc"=>$cvc,":nomt"=>$nomt,":mes"=>$mes,":anno"=>$anno,":ci"=>$ci));

	$ans5=$base->prepare($consultaSql5);
	$ans5->execute(array(":f_ini"=>$fecha_inicial,":f_nal"=>$fecha_final,":sw"=>$estado_sw,":ci"=>$ci,":codhab"=>$codhab));


}


 ?>