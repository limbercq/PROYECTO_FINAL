<?php 

 session_start();
 
include ("conexion.php");
 if(!empty($_SESSION['tipo'])){
 $tipo=$_SESSION['tipo'];
$sql = "SELECT * FROM habitacion WHERE tipo like '$tipo'";
$registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);
echo $_SESSION['tipo'];
$a=$registro[0];
$a->tipo;
$a->costo;
$a->nro_camas;
 }
else{
	echo "controla que no hagan siguiente si haber reservado el tipo de hab";
	header("Location: motor.php?codFlujo=F1&codProceso=P2");
}



// echo $registro["tipo"]=>$a;



// $sql = "SELECT DISTINCT tipo,costo,nro_camas FROM habitacion";
// $registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);
//     foreach ($registro as $hab) {
//         echo $tipo=$hab->tipo;
//         echo $costo=$hab->costo;
//         echo $nroc=$hab->nro_camas;
//     }




// $sql = "SELECT DISTINCT tipo,costo,nro_camas FROM habitacion";

// $resultado=mysqli_query($conexion,$sql);

// while($fila=mysqli_fetch_array($resultado)){
// 	echo "tipo ". $fila['tipo']."<br>";
// 	echo "costo ".$fila['costo']."<br>";
// 	echo " nro_camas ".$fila['nro_camas']."<br>";
// 	echo "<br>";
// 	echo "<br>";
// }
 ?>

