<?php 
session_start();

	// echo $_SESSION['ci'];
	// echo $_SESSION['nombre']=$_POST['nombre'];
	// echo $_SESSION['apellido']=$_POST['apellido'];
	// echo $_SESSION['nacionalidad']=$_POST['nacionalidad'];
	// echo $_SESSION['emial']=$_POST['emial'];
	// echo $_SESSION['password']=$_POST['password'];
	// echo $_SESSION['nro_tarjeta']=$_POST['nro_tarjeta'];
	// echo $_SESSION['cvc']=$_POST['cvc'];
	// echo $_SESSION['nom_tarjeta']=$_POST['nom_tarjeta'];
	// echo $_SESSION['mes']=$_POST['mes'];
	// echo $_SESSION['anno']=$_POST['anno'];

// include("controladoringresaDatosRegCli.php");
 $ci=$_SESSION['ci'];
 $nombre=$_SESSION['nombre'];
 $apellido=$_SESSION['apellido'];
 $nacionalidad=$_SESSION['nacionalidad'];
 $correo= $_SESSION['emial'];
 $password=$_SESSION['password'];
 $nrot=$_SESSION['nro_tarjeta'];
 $cvc=$_SESSION['cvc'];
 $nomt=$_SESSION['nom_tarjeta'];
 $mes=$_SESSION['mes'];
 $anno=$_SESSION['anno'];


 ?>
<div class="col-6">
 <h2>REGISTRO DEL CLIENTE</h2>
 <br>
 	<form action="" method="post">
 		<label for="">CI</label>
 		<input type="text" value="<?php  echo $ci;?>" readonly>
 		<br>
 		<label for="">NOMBRE</label>
 		<input type="text" value="<?php  echo $nombre;?>" readonly>
 		<br>
 		<label for="">APELLDIO</label>
 		<input type="text" value="<?php  echo $apellido;?>" readonly>
 		<br>
 		<label for="">NRO TARJETA</label>
 		<input type="text" value="<?php  echo $nrot;?>" readonly>
  		<br>
 		<input type="submit" value="REGISTRAR AL CLIENTE" name="registro_cliente">
 	</form>
 	
 <?php  include("controladoringresaDatosRegCli.php"); ?>
 </div>