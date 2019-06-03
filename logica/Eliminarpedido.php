<?php 

require 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM ruta WHERE id_Ruta='".$id."'";



if ($conexion->query($sql)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../rutas.php"
			</script>';
		
		}






 ?>