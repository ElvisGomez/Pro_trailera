<?php 

	require 'conexion.php';

	$nombre = $_POST['nombre_Cliente'];
	$tel = $_POST['telefono'];
	$email = $_POST['correo_Cliente'];
	$direccion = $_POST['direccion_Cliente'];
	$lat_Cliente = $_POST['lat_Cliente'];
	$long_Cliente = $_POST['long_Cliente'];




	$insertar= "INSERT INTO `cliente`(`nombre_Cliente`, `telefono_Cliente`, `email_Cliente`, `direccion_Cliente`, `lat_Cliente`, `Long_Cliente`) values ('$nombre','$tel','$email','$direccion','$lat_Cliente','$long_Cliente')";


	if (isset($_POST['guardar'])) {
	
		if ($conexion->query($insertar)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../clientes.php"
			</script>';
		}

	}

	




 ?>