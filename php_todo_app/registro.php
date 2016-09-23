<!DOCTYPE html>
<html>
	<head>
		<title>
			REGISTRO DE USUARIOS
		</title>
		
		<meta charset="utf-8"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		

		<!-- bootstrap -->
	 	 <link rel="stylesheet" href="js/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	    <script src="js/jquery-2.1.4.min.js"></script>
	    <script src="js/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

		<!--bootstrap fin-->

	</head>
	
	<body>

	<section class="container">
    <div class="login">
    	<h1><legend>Registro Usuarios</legend></h1>

		<div id="bloquecentro_registro">	
			<form action="registrar.php" method="post">
				<fieldset>
					
					<center>
						<table cellspacing="20px" align="center">
							<tr><td>
								<p><input type="text" name="nombre" value="" placeholder="Nombre "/></p>
							</td></tr>

							<tr><td>
								<input type="text" name="apellidos" placeholder="Apellidos" />
							</td></tr>

							<tr><td>
								<input type="text" name="dni" placeholder="DNI"/>
							</td></tr>

							<tr><td>
								<input type="text" name="e_mail" placeholder="e-mail" />
							</td></tr>

							<tr><td>
								<input type="text" name="telefono" placeholder="Telefono" /></td>
							</tr>

							<tr><td>
								<input type="text" name="direccion" placeholder="Direccion"/>
							</td></tr>

							<tr><td>
								<input type="password" name="passwo" placeholder="Contrasenna"/>
							</td></tr>

							<tr><td>
								<input type="password" name="passwo1" placeholder="Confirmar Contrasenna" />
							</td>
							</tr>
						
						<tr><td>
								</br></br>	
						</td></tr>

								 	 
							<tr><td>
									<input type="submit" value="Registrar" />
									<input type="reset" value="Borrar"/>
							</td></tr>

						</table>
						</center>
					</form>
				
			</fieldset>
			
		</div>
		</div>
		</section>
		<section class="about">
    		<p class="about-links"> 
    			<a href='index.html'>Click here to Iniciar Sesion</a></p><br><br>
		    <p class="about-author">
		      Rudy &copy;2016 <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
		      Original PSD by </p>
		 </section>			
		>
	</body>

</html>

<?php

if (isset($_POST['nombre']) and isset($_POST['dni']) and isset($_POST['e_mail']) and isset($_POST['telefono']) and isset($_POST['direccion']) and isset($_POST['passwo']) and isset($_POST['passwo1'])) {

if ($_POST['nombre'] != '' and $_POST['dni'] != '' and $_POST['e_mail'] != '' and $_POST['passwo'] != '' and $_POST['passwo1'] != '') {
	if ($_POST['passwo'] == $_POST['passwo1']) {

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$dni = $_POST['dni'];
		$e_mail = $_POST['e_mail'];
		$telefono = $_POST['telefono'];
		$direcc = $_POST['direccion'];
		$pass = $_POST['passwo'];
		$pass1 = $_POST['passwo1'];
		$date = date('Y-m-d H');
		
		//$encrypted_pass=md5($pass);
		$con=mysql_connect("localhost", "zubiri", "zubiri") or die (" No se pudo establecer conexion con el servidor");

		if (mysql_select_db("CARRITO", $con)) {

			if ($nombre == 'admin' or $nombre == 'Usuario')	{

				$sql= "INSERT INTO clientes values ('0', '$nombre', '$apellidos', '$dni', '$e_mail', '$telefono', '$direcc','$pass', 'admin', '$date')";
				if(mysql_query($sql,$con))
				{
				header('location:index.php');
				}
			}
			else
				$sql= "INSERT INTO clientes values ('0', '$nombre', '$apellidos', '$dni','$e_mail', '$telefono', '$direcc', '$pass', 'Usuario', '$date')";
				if(mysql_query($sql,$con)){
					
				header('location:index.php');
				}	
	
		}
	}
	else
		echo "<script>alert('Las contrasenyas no son iguales')</script>";
}
else
	echo "<script>alert('No se pueden dejar campos vacios')</script>";
}


?>