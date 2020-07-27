
<?php
//include 'conexion.php';
$conexion2=mysqli_connect("localhost","root","","bd_hotel");  
$disponibles="SELECT count(*) FROM habitacion h WHERE h.estado=false ";
$resultado1=mysqli_query($conexion2,$disponibles);
$filas=mysqli_fetch_array($resultado1);
$disp=$filas[0];
 
$NOdisponibles="SELECT count(*) FROM habitacion h WHERE h.estado=true ";
$resultado1=mysqli_query($conexion2,$NOdisponibles);
$filas=mysqli_fetch_array($resultado1);
$nodisp=$filas[0];
 

 

?>
<div class="col-6 text-center">
    <h3 class="tipografia_2 text-info">Hay Habitaciones disponibles Desea Reservar? </h3>
    <div class="col-auto">
    <table class="table table-striped table-bordered text-center"> 
    <tr>
        <td>Disponibles</td> 
        <td>No Disponibles</td></tr>
 
    <tr>
        <td><?php echo $disp; ?></td>
        <td><?php echo $nodisp;?></td>
    </tr>
    </table>
    <form method="POST">
        <input type="submit" class="btn btn-secondary col-5" value="si" name="si">
        <input type="submit" class="btn btn-success col-5" value="no" name="no"> 
    </form>
    </div>
     
</div>
<div class="col-6">
    <img src="img/m-dof1420.jpg" alt="Card image cap" class="card-img-top">
</div>