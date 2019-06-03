<?php 

require 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM vehiculo WHERE id_Vehiculo='".$id."'";



if ($conexion->query($sql)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../autos.php"
			</script>';
		
		}



 ?>