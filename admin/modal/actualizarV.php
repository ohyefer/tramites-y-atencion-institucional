<?php



	require('../config/conexion.php');
    $conexion=conectarse();
	
	    $nombre = $_POST['nombre'];
	    $apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$departamento = $_POST['departamento_id'];
		$status = $_POST['estatus_id'];


	$sql = $conexion->query("update publico set nombre='$nombre', apellido='$apellido', departamento_id='$departamento', estatus_id='$status'  where cedula='$cedula'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Pase Accedido"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../registrado.php">