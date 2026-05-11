<?php



	require('../config/conexion.php');
    $conexion=conectarse();
	
	    $cod = $_POST['id_tramites']; 
	    $nombre = $_POST['nombre_tramite'];
		$requi = $_POST['requisitos_id'];
		$tipo = $_POST['tipopersonal_id'];

	$sql = $conexion->query("update tramites set nombre_tramite='$nombre', requisitos_id='$requi', tipopersonal_id='$tipo'  where id_tramites='$cod'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("trámite Actualizado"); 
     </SCRIPT> 
     
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../tramite.php">
