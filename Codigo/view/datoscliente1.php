
<div class="col-6">
	<form method="post" class="was-validated">
		<!-- ***************datos del cliente********* -->
		<label for="ci">CI : </label>
		<input class="form-control" type="text" name="ci"  value="" required>
		
		<label for="nombre">nombre : </label>
		<input class="form-control" type="text" name="nombre" required>
		
		<label for="apellido">apellido : </label>
		<input class="form-control" type="text" name="apellido" required>
		
		<label for="nacionalidad">nacionalidad : </label>
		<input class="form-control" type="text" name="nacionalidad" required>
		
		<h4>INGRESE CORREO PARA CREAR USUARIO</h4>
		
		<label for="emial">correo : </label>
		<input class="form-control" type="emial" name="emial" placeholder="ejemplo@gmail.com" required>
		<label for="password">crear otra contraseña : </label>
		<input class="form-control" type="password" name="password" required>
		
		<!-- ***************datos de la tarjeta********* -->
		<label for="nro_tarjeta">NRO_TARJETA</label>
		<input class="form-control" type="number" name="nro_tarjeta" required>
		
		<label for="cvc">CVC</label>
		<input class="form-control" type="number" name="cvc" required>
		
		<label for="nom_tarjeta">NOMBRE TARJETA</label>
		<input class="form-control" type="text" name="nom_tarjeta" placeholder="bisa" required>
		
		<label for="mes">MES</label>
		<input class="form-control" type="number" name="mes" max="12" min="1" placeholder="01" required> 
		
		<label for="anno">AÑO</label>
		<input class="form-control" type="number" name="anno" min="2019"  max="2050" placeholder="2020" required> 
		
		<!-- ***************datos de la reserva********* -->
		
		<input type="submit"  class="btn btn-success mt-2" value="ENVIAR" name="datos_cliente">
		
		

	</form>

	</div>
	<div class="col-6">
    <img src="img/registrar.jpg" alt="Card image cap" class="card-img-top">
	<img src="img/tarjeta-de-credito.jpg" alt="Card image cap" class="card-img-top">
</div>	