<?php 
		
		if(isset($_POST['submit'])){

		require('../config/conexion.php');
        $conexion=conectarse();
		$nombre = $_POST['nombre_tra'];
		$apellido = $_POST['apellido_tra'];
		$cedula = $_POST['cedula_tra'];
		$correo = $_POST['correo_tra'];
		$motivo = $_POST['motivo_tra'];
		$fechai = $_POST['fecha_inicio'];
		$fecha_tra = $_POST['fecha_tra'];
		$tipop = $_POST['tipopersonal_id'];
		$tram = $_POST['tramites_id'];
		$req = $_POST['requisitos_id'];
		$dep = $_POST['departamento_id'];
	
		




		mysqli_query($conexion, "INSERT INTO registro_tramites (`id_registro`, `nombre_tra`, `apellido_tra`,`cedula_tra`,`correo_tra`,`motivo_tra`,`fecha_inicio`,`fecha_tra`,`tipopersonal_id`, `tramites_id`, `requisitos_id`, `departamento_id` ) VALUES (NUll,'$nombre', '$apellido', '$cedula', '$correo', '$motivo', '$fechai', '$fecha_tra','$tipop', '$tram', '$req', '$dep' )");
	}
	
	?>

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Trámites registrado existosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../principal.php">