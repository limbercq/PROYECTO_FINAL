<h3 class="tipografia_2 text-info">Proceso 5.</h3>

<?php
    include 'conexion.php';
    $sentencia="SELECT h.codhabitacion,tipo,h.costo,h.nro_camas 
                    FROM habitacion h 
                    WHERE h.estado = false";
    $resultado = mysqli_query($conexion2, $sentencia);

    if($resultado->num_rows === 0)
        {   
        echo "no hay ninguna habitacion";
    }else{
?>
    <div class="col-12" id="habitacines">
        <h1 class="tipografia_1 mt-4 fw-50">Habiataciones Disponibles</h1>
        <div class="card-deck">
        <!-- Repetir Habitaciones Disponibles -->
        <?php 
            while ($row = mysqli_fetch_array($resultado)) {                
                echo "
                <div class='col-md-3  p-0 pb-3'>
                <div class='card mx-3'>
                    <img class='card-img-top' src='img/m-dof1420.jpg' alt='Card image cap'>
                    <div class='card-body'>
                    <h5 class='card-title tipografia_1'>Habitacion ".$row['codhabitacion']."</h5>      
                    <ul>
                        <li class='list-grop'><span class='text-info'>Precio :</span> ".$row['costo']." Bs.</li>
                        <li><span class='text-info'>Tipo : </span> ".$row['tipo']."</li>
                        <li><span class='text-info'>Nro Camas :</span> ".$row['nro_camas']."</li>
                    </ul>        
                    </div>                                                                 
                </div>
                </div>
                ";
            }         
        ?>          
        <!-- Fin Repetir Habitaciones Disponibles -->                    
        </div>
    </div>
<?php
    }
?>
             
