<?php
    session_start();
?>
<div class="col-8">
<h3 class="tipografia_2 text-info">Proceso 7. Ingresa Datos De Habitacion</h3>
    <table class="table table-striped table-bordered">
    <tr>
    <?php
        echo "<tr>";
        echo "<th>Habitacion</th>";
        echo "<th>Fecha de Ingreso</th>";
        echo "<th>Fecha de Salida</th>";
        echo "<th>Opcion</th>";
    
        $habitaciones="SELECT h.codhabitacion,h.tipo,h.costo,h.nro_camas
                        FROM habitacion h 
                        WHERE h.estado = false";
        $resultado = mysqli_query($conexion2, $habitaciones);        
        $cont=0;        
        while($numero=mysqli_fetch_array($resultado)){
            $HAB[]="$numero[0]-$numero[1]-$numero[2]-$numero[3]";
            $cod[]=$numero[0];
            $cont++;
        }
        ?>
    </tr>              
        <form action="#" method="POST" class="was-validated">
        <td>
        <select name="codhab" class="custom-select is-invalid" required>   
        
            <?php 
                    for ($i=0;$i<$cont;$i++){
                        echo "<option value= ".$cod[$i]."> ".$HAB[$i]."</option>"; 
                }
            ?>
        </select></td>
        <td><input type="date" class="form-control is-invalid" name="fIngre" required></td>
        <td><input type="date" class="form-control is-invalid" name="fSalid" required></td>
        
        <td><input type="submit" value="Ingresar Datos" class="btn btn-success btn-block" name="ingresarDatosCliente"> </td>
        </form>
   </table>
</div>
<div class="col-4">
    <img src="img/fecha.jfif" alt="Card image cap" class="card-img-top">
</div>
<?php
    if(isset($_POST['ingresarDatosCliente']))
    {
    $_SESSION['codhab']=$_POST["codhab"];
    $_SESSION['fIngreso']=$_POST["fIngre"];
    
    $_SESSION['fSalida']=$_POST["fSalid"];
    }
?>
 
  