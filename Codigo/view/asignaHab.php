<div class="col-12">
<h3 class="tipografia_2 text-info">Proceso12. Se asigna al cliente la habitacion</h3>

<?php
       session_start();
       if((empty($_SESSION['codhab'])) or (empty($_SESSION['carnet'])) or (empty($_SESSION['nroTarjeta'])) or (empty($_SESSION['fIngreso'])) or
        (empty($_SESSION['fSalida'])))
       {
            echo "faltan datos o ya se asigno la habitacion";

       }else{
        
       $codhab = $_SESSION['codhab'];
       $ci = $_SESSION['carnet'];
       $nroTarjeta = $_SESSION['nroTarjeta'];
       $fInfre = $_SESSION['fIngreso'];
       $fSalid = $_SESSION['fSalida'];
?>
<br>
<table class="table table-striped table-bordered">
<tr>
    <th>Cod Habitacion</th>
    <th>Ci</th>
    <th>Fecha Ingreso</th>
    <th>Fecha Salida</th>
    <th>Opcion</th>
</tr>
<tr>
     <td><?php echo $codhab; ?></td>
     <td><?php echo $ci; ?></td>
     <td><?php echo $fInfre ?></td>
     <td><?php echo $fSalid; ?></td>


    <form action="" method="POST"> 
    <input type="hidden" value="<?php echo $codhab; ?>" name="codhab">
    <input type="hidden" value="<?php echo $ci; ?>" name="ci">
    <input type="hidden" value="<?php echo $nroTarjeta; ?>" name="nroTarjeta">  
    <input type="hidden" value="<?php echo $fInfre; ?>" name="fIngre" >
    <input type="hidden" value="<?php echo $fSalid; ?>" name="fSalid" >
    
    <td><input type="submit" class="btn btn-info btn-block" value="Asignar" name="asignar"></td>
    </tr>
</table>
</form> 
 

<?php
            
            include 'conexion.php';
            if(isset($_POST['asignar']))
            {    
            $codhab = $_POST['codhab'];
            $ci = $_POST['ci'];
            $nroTarjeta = $_POST['nroTarjeta'];
            $fInfre = $_POST['fIngre'];
            $fSalid = $_POST['fSalid'];
            $InsertaHuesped="INSERT INTO huesped (ci,nro_tarjeta,estado) VALUES ('$ci','$nroTarjeta','1')";
            $ejecutaInsertaHuesped=mysqli_query($conexion2,$InsertaHuesped);
         
            $InsertaSeHospeda="INSERT INTO se_hospeda (fecha_ingreso,fecha_salida,ci,codhab) VALUES ('$fInfre','$fSalid','$ci','$codhab')";
            $ejecutaInsertaSeHospeda=mysqli_query($conexion2,$InsertaSeHospeda);
         
            $ActualizaHabitacion="UPDATE habitacion SET estado=true WHERE codhabitacion='$codhab'";
            $ejecutaActualizaHabitacion=mysqli_query($conexion2, $ActualizaHabitacion);
            session_destroy();
            echo "La siguiente habitacion ha sido asignada: ";
            echo $codhab;
            }
            
       
       }
             

?>
</div>