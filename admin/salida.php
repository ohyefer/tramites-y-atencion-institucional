<?php
	include ("config/conexion.php");
	$conexion = conectarse();
	mysqli_set_charset($conexion,'utf8');
?>
	<?php
		
		$cedula = $_REQUEST['cedula_p'];
		$consulta = "UPDATE agregar_pase 
									SET
										estatu_id = 2
									WHERE
										cedula_p = '$cedula'";
		mysqli_query($conexion,$consulta);
	?>	
	
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=registrado.php">