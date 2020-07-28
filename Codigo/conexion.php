<?php


$conexion = mysqli_connect("localhost","root","","bd_hotel_flujo");
//$conexion2 = mysqli_connect("localhost","root","","flujo");
$conexion2 = mysqli_connect("localhost","root","","bd_hotel");


if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

try {
	$base=new PDO('mysql:host=localhost;dbname=bd_hotel','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {
	die('Error '.$e->getMessage());
	echo "Linea del error".$e->getLine();
	echo "ERROR EN LA CONEXION DE DATOS COMPROBAR QUE LOS DATOS COINSIDAD";
}

//echo "Connected successfully";
 
/*$consulta= "INSERT INTO huesped (ci, nro_tarjeta, estado) VALUES ('20170291','547000','1')";
//$resultado=mysqli_query($conexion, $insertarHuesped);


 
//$consulta = "INSERT INTO usuario (ci,nombre) VALUES ('20175544','vadd')";

 if (mysqli_query($conexion, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
*/




?>
