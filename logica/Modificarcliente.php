<?php 

	require 'conexion.php';

	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];


	$sql = "UPDATE cliente SET nombre_Cliente='$nombre', telefono_Cliente='$telefono', email_Cliente='$email', direccion_Cliente='$direccion' WHERE id_Cliente ='$id'";


	$resultado = $conexion->query($sql);




	if ($resultado==TRUE)
	{
		
		echo'<script lenguage= javascript>
          self.location= "../clientes.php?m=BIEN"
          </script>';
	}
	else
	{
		echo'<script lenguage= javascript> 
          self.location= "../clientes.php?p=0x80249005"
          </script>';
	}











 ?>