<?php 






		require('../config/conexion.php');
        $conexion=conectarse();
		
		if (!empty($_POST)) {
		$nombre = $_POST['nombre_tramite'];
		$re = $_POST['requisitos_id'];
		$tipop = $_POST['tipopersonal_id'];




		mysqli_query($conexion, "INSERT INTO `atencion_ciudadano`.`tramites` (`id_tramites`, `nombre_tramite`, ``,`tipopersonal_id`) VALUES (NULL, '$nombre', '$re', '$tipop')")
  		or die("Problemas en el select".mysqli_error($conexion));
  			}

  			?>

  			 <SCRIPT LANGUAGE="javascript"> 
         alert("Usuario registrado existosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../tramite.php">