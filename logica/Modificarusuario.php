<?php 

	require 'conexion.php';

	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$correo = $_POST['correo'];


	$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', usuario='$usuario', correo='$correo' WHERE id_usuario = '$id'";


	$resultado = $conexion->query($sql);




	if ($resultado==TRUE)
	{
		
		echo'<script lenguage= javascript>
          self.location= "../usuarios.php?m=BIEN"
          </script>';
	}
	else
	{
		echo'<script lenguage= javascript> 
          self.location= "../usuarios.php?p=0x80249005"
          </script>';
	}



 ?>













 ?>