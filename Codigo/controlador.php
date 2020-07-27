<?php
$codFlujo=$_GET["codFlujo"];
$codProceso=$_GET["codProceso"];
$codProcesoSiguiente=$_GET["codProcesoSiguiente"];
$archivo=$_GET["archivo"];
//include "controlador".$archivo;

if(isset($_GET["Anterior"])){
    $consulta="select * from proceso where codFlujo='$codFlujo' and codProcesosig='$codProceso'";
}
if(isset($_GET["Siguiente"])){
    $consulta="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";

}
include "conexion.php";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$codProcesEnvia=$fila['codProceso'];
$archivoEnvia="motor.php?codFlujo=".$codFlujo."&codProceso=".$codProcesEnvia;
header("Location: ".$archivoEnvia);

?>
 