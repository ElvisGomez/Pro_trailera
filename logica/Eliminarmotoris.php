<?php 

require 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM motorista WHERE id_Motorista='".$id."'";



if ($conexion->query($sql)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../empleados.php"
			</script>';
		
		}






 ?>