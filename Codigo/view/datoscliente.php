<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORMULARIO PARA LLENAR DATOS DEL CLIENTE</title>
</head>
<?php 
session_start();
echo $ci=$_SESSION['ci'];
 ?>
<body>
	<form action="" method="post">
		<!-- ***************datos del cliente********* -->
		<label for="ci">CI : </label>
		<input type="text" name="ci"  value="">
		<br>
		<label for="nombre">nombre : </label>
		<input type="text" name="nombre" required>
		<br>
		<label for="apellido">apellido : </label>
		<input type="text" name="apellido" required>
		<br>
		<label for="nacionalidad">nacionalidad : </label>
		<input type="text" name="nacionalidad" required>
		<br>
		<h4>INGRESE CORREO PARA CREAR USUARIO</h4>
		
		<label for="emial">correo : </label>
		<input type="emial" name="emial" placeholder="ejemplo@gmail.com" required><br>
		<label for="password">crear otra contraseña : </label>
		<input type="password" name="password" required>
		<br><br>
		<!-- ***************datos de la tarjeta********* -->
		<label for="nro_tarjeta">NRO_TARJETA</label>
		<input type="number" name="nro_tarjeta" required>
		<br>
		<label for="cvc">CVC</label>
		<input type="number" name="cvc" required>
		<br>
		<label for="nom_tarjeta">NOMBRE TARJETA</label>
		<input type="text" name="nom_tarjeta" placeholder="bisa" required>
		<br>
		<label for="mes">MES</label>
		<input type="number" name="mes" max="12" min="1" placeholder="01" required> 
		<br>
		<label for="anno">AÑO</label>
		<input type="number" name="anno" min="2019"  max="2050" placeholder="2020" required> 
		<br>
		<!-- ***************datos de la reserva********* -->
		
		<input type="submit" value="ENVIAR_FORMULARIO" name="datos_cliente">
		<br>
		<br>

	</form>

<?php 
include("controladordatoscliente.php");
 ?>
	
</body>
</html>