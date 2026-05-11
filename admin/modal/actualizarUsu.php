<?php



	require('../config/conexion.php');
    $conexion=conectarse();
	
	    $cod = $_POST['id_login']; 
	    $nombre = $_POST['nombre_apellido'];
		$correo = $_POST['email'];
		$user = $_POST['username'];
		$password = $_POST['password'];
		$cargo = $_POST['cargo_id'];
		$pisos = $_POST['pisos_id'];
		$departamento = $_POST['departamento_id'];


	$sql = $conexion->query("update login set nombre_apellido='$nombre', email='$correo', username='$user', password='$password', cargo_id='$cargo', pisos_id='$pisos', departamento_id='$departamento'  where id_login='$cod'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Usuario Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../usuarios.php">