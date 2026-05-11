<?php 

		require('../config/conexion.php');
        $conexion=conectarse();
		
		if (!empty($_POST)) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$correo = $_POST['correo'];
		$motivo = $_POST['motivo'];
		$fecha =  $_POST['fecha'];
		
		


		mysqli_query($conexion, "INSERT INTO `atencion_ciudadano`.`publico` (`id_publico`, `nombre`, `apellido`,`cedula`, `correo`, `motivo`, `fecha`) VALUES (NULL, '$nombre', '$apellido', '$cedula', '$correo', '$motivo', '$fecha')")
  		or die("Problemas en el select".mysqli_error($conexion));

  	}
  		?>

  			 <SCRIPT LANGUAGE="javascript"> 
         alert("Ciudadano(A) registrado existosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../registrado.php">