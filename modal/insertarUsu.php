<?php 






		require('../config/conexion.php');
        $conexion=conectarse();
		
		if (!empty($_POST)) {
		$nombre = $_POST['nombre_apellido'];
		$correo = $_POST['email'];
		$user = $_POST['username'];
		$password = $_POST['password'];
		$cargo = $_POST['cargo_id'];
		$pisos = $_POST['pisos_id'];
		$departamento = $_POST['departamento_id'];




		mysqli_query($conexion, "INSERT INTO `atencion_ciudadano`.`login` (`id_login`, `nombre_apellido`, `email`,`username`, `password`, `cargo_id` , `pisos_id` , `departamento_id`) VALUES (NULL, '$nombre', '$correo', '$user', '$password', '$cargo', '$pisos', '$departamento')")
  		or die("Problemas en el select".mysqli_error($conexion));
  		
		mysqli_close($conexion);
		}
		

		header('Location: ../usuarios.php');

		

	
 ?>