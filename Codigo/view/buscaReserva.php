<?php
    session_start();
?>
<div class="col-6 text-center">
    <h3 class="tipografia_2 text-info">Proceso2. Se busca la reserva</h3>

    <form action="" method="POST" class="was-validated" >  
        <div class="input-group mb-3 ">
            <input type="number" class="form-control" placeholder="Ingrese el C.I de reserva" name="reserva" required>
            <div class="input-group-append">
                <input type="submit" class="btn btn-outline-info" value="Buscar Reserva" name="buscarReserva"> 
            </div>
            <div class="invalid-feedback">Ingrese el carnet de identidad con que hizo la reserva </div>
        </div>
    </form> 
</div>
<div class="col-6">
    <img src="img/buscar.webp" alt="Card image cap" class="card-img-top">
</div>


<?php
    if(isset ($_POST['buscarReserva']))
    { 
        $carnet=$_POST["reserva"];
        echo 'El Carnet ingresado es :' .$carnet;
 
        $_SESSION['carnet'] = $carnet;

    }
         
?>