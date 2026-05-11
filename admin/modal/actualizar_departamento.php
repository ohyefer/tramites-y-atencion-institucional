<?php



	require('../config/conexion.php');
    $conexion=conectarse();
	
	    $cod = $_POST['id_departamento']; 
		$departamento = $_POST['add_departamento'];
		$pisos = $_POST['pisos_id'];
	


	$sql = $conexion->query("update departamentos set add_departamento='$departamento', pisos_id='$pisos'  where id_departamento='$cod'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Departamento Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../departamentos.php">