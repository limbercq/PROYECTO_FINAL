<?php
    session_start();
    
 
?> 
<div class="col-12">
    <h3 class="tipografia_2 text-info">Proceso 3. Se elije la reserva que hizo el cliente</h3>
    <?php
    if(empty($_SESSION['carnet']))
    {
        echo "<span class='text-danger'> no hay ningun carnet</span>";
     }else{
        $carnet = $_SESSION['carnet'];

    ?>  
        <table class="table table-striped col-md-11">
       
    <?php
        $carnet=$_SESSION['carnet'];
        $conexion=mysqli_connect("localhost","root","","bd_hotel");  
        $sentencia=" SELECT r.codhab,r.fecha_ingreso, r.fecha_salida, u.ci,t.nro_tarjeta, u.nombre, u.apellido, u.nacionalidad, u.correo
                    FROM reserva r, usuario u,tarjeta t
                    WHERE r.ci='$carnet' and u.ci=r.ci and t.ci=u.ci";
        $resultado=mysqli_query($conexion,$sentencia);
       
        if($resultado->num_rows === 0)
            {   
                
            echo "<span class='text-danger'> No hay ninguna recepcion</span>";
            
            }else{
                echo "<th>Habitacion</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha de ingreso</th>";
                echo "<th>Fecha de salida</th>";
                echo "<th>Nacionalidad</th>";
                echo "<th>Correo</th>";
                echo "<th>Opciones</th>";


            while($filas=mysqli_fetch_array($resultado))
             {  
                echo "<br>";
                echo "<tr>";
                echo "<td>"; echo $filas['codhab']; echo "</td>"; 
                echo "<td>"; echo $filas['nombre']; echo "</td>";
                echo "<td>"; echo $filas['apellido']; echo "</td>";
                echo "<td>"; echo $filas['nacionalidad']; echo "</td>";
                echo "<td>"; echo $filas['fecha_ingreso']; echo "</td>";
                echo "<td>"; echo $filas['fecha_salida']; echo "</td>";
                echo "<td>"; echo $filas['correo']; echo "</td>";
                  ?>

                <form action="" method="POST">
                <input type="hidden" value="<?php echo $filas['codhab'] ?>" name="codhab">
                <input type="hidden" value="<?php echo $filas['ci'] ?>" name="ci">
                <input type="hidden" value="<?php echo $filas['nro_tarjeta'] ?>" name="nroTarjeta">
                <input type="hidden" value="<?php echo $filas['fecha_ingreso'] ?>" name="fIngreso">
                <input type="hidden" value="<?php echo $filas['fecha_salida'] ?>" name="fSalida">
                <td>    <input type="submit" class="btn btn-block btn-info" value="Elegir" name="elegir">   </td>
                </form>
                <br>
              <?php

              }
                        
                }
        ?>
   </table>
   <br>
   </div>
<?php
    if(isset ($_POST['elegir']))
        { 
            $_SESSION['carnet'] = $carnet;
            $_SESSION['codhab'] = $_POST["codhab"];
            $_SESSION['nroTarjeta'] = $_POST["nroTarjeta"];
            $_SESSION['fIngreso'] = $_POST["fIngreso"];
            $_SESSION['fSalida'] = $_POST["fSalida"];
 
        }
    }
?> 