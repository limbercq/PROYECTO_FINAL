
<?php

if(empty($_GET["codProceso"])){
     $codFlujo='F3';
    $codProceso='P1';
}else{
  $codFlujo=$_GET["codFlujo"];
  $codProceso=$_GET["codProceso"];      
}

include "conexion.php";
$consulta="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);

$codProcesoSiguiente=$fila['codProcesosig'];
 
$archivo=$fila['pantalla'];
 

// codigo para cuando el siguiente proceso es null

    if($codProcesoSiguiente=='null'){
    
        $consulta="select * from procesocond where codFlujo='$codFlujo' and codProceso='$codProceso'";
        $resultado=mysqli_query($conexion,$consulta);
        $fila=mysqli_fetch_array($resultado);
        if(isset($_POST['si'])){
            $codProcesoSiguiente=$fila['codProcesoSI'];
        }
        if(isset($_POST['no'])){
           $codProcesoSiguiente=$fila['codProcesoNo'];

        }
    }

?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css" media="screen, print">
     @font-face {font-family: Lobster-Regular; src: url(font/Lobster-Regular.ttf);}
    </style>
</head>
   
   
<body>
    <div class="container-fluid">
        
            <?php 
            include_once('view/menu.php');
            // echo $codProcesoSiguiente. '<br>';
            // echo $archivo;
             ?>
        <div class="row align-items-center">
            <div class="col-12"> <h1 class="tipografia_1">Motor de Flujo</h1>  </div>
            <div class="col-12">
               <div class="row align-items-center">
               <?php
                    include('view/'.$archivo);
                ?>
               </div>
            </div>
            <div class="col-10 offset-2 mt-4 ">
                <form action="controlador.php" class="form-row " method="GET">                
                    <input type="hidden" value="<?php echo $codFlujo; ?>" name="codFlujo"> 
                    <input type="hidden" value="<?php echo $codProceso; ?>" name="codProceso"> 
                    <input type="hidden" value="<?php echo $codProcesoSiguiente; ?>" name="codProcesoSiguiente"> 
                    <input type="hidden" value="<?php echo $archivo; ?>" name="archivo"> 
                    <input type="submit" class="btn btn-info col-4" value="Anterior" name="Anterior"> 
                    <input type="submit" class="btn btn-success col-4 ml-2" value="Siguiente" name="Siguiente">                
                </form>  
            </div>
            <?php 
                include('view/footer.php')
            ?>       
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>