<?php
    session_start();
?>

<div class="col-6 text-center">
<h3 class="tipografia_2 text-info">Proceso11. se busca el ci, despues de haber ingresado al cliente a la base de datos</h3 class="tipografia_2 text-info">
<form action="" method="POST" class="was-validated">
    <div class="input-group mb-3 col-10">
    <input type="text" placeholder="Ingresa Ci" class="form-control" name="cliente" required>
    <div class="input-group-append">
        <input type="submit" value="Buscar Cliente" class="btn btn-success" name="buscarCliente">
    </div>
    </div>
   
</form>         
<?php
    include "conexion.php";
    if(isset ($_POST['buscarCliente']))
    {    
    ?>  
        <table class="table table-striped col-md-11">
       
        <?php
        $carnet=$_POST["cliente"];
        //echo $carnet;
        $sentencia="SELECT u.ci,u.nombre, u.apellido,u.nacionalidad,u.correo,t.nro_tarjeta
                    FROM usuario u, tarjeta t
                    WHERE u.ci='$carnet' and u.ci=t.ci";
        $resultado=mysqli_query($conexion2,$sentencia);
        $resultado2=mysqli_query($conexion2,$sentencia);

        $_SESSION['carnet']=$carnet;
        $filas2=mysqli_fetch_array($resultado2);
        $_SESSION['nroTarjeta']=$filas2['nro_tarjeta']; 
        
        if($resultado->num_rows === 0)
            {   
                
            echo "No hay ningun cliente con ese nombre";
             
            ?>
            <br>
            <?php
            }else{
            echo "<th>Nombre</th>";
            echo "<th>Apellido</th>";
            echo "<th>Nacionalidad</th>";
            echo "<th>Correo</th>";
   
                while($filas=mysqli_fetch_array($resultado))
                {  
                    echo "<br>";
                    echo "<tr>";
                    echo "<td>"; echo $filas['nombre']; echo "</td>";
                    echo "<td>"; echo $filas['apellido']; echo "</td>";
                    echo "<td>"; echo $filas['nacionalidad']; echo "</td>";
                    echo "<td>"; echo $filas['correo']; echo "</td>";

                    ?>

                    <br>
                  <?php

                }
           
                
            }
      
}
            ?>
    
   </table>
<?php
            
?>
</div>
<div class="col-6">
    <img src="img/buscar.webp" alt="Card image cap" class="card-img-top">
</div>