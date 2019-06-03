 <?php 

	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$user = $_POST['usuario'];
	$contra = $_POST['contrasena'];
	$correo = $_POST['correo'];
	$rol = $_POST['rol'];




	$insertar = "INSERT INTO usuario (nombre,apellido,usuario,contrasena,correo,id_rol) 
				 values ('$nombre','$apellido','$user', sha1('$contra'),'$correo','$rol')";



	if (isset($_POST['guardar'])) {
	
		if ($conexion->query($insertar)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../usuarios.php"
			</script>';
		}
	}















 ?>