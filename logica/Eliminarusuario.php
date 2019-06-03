s
<?php 

 require 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM usuario WHERE id_usuario ='".$id."'";







if ($conexion->query($sql)==TRUE) 
		{
			echo '<script language=javascript>
			self.location = "../usuarios.php"
			</script>';
		}

else{
			echo '<script language=javascript>
			self.location = "../usuarios.php"
			</script>';
}




 ?>




       v