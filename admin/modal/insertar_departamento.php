<?php 






		require('../config/conexion.php');
        $conexion=conectarse();
		
		if (!empty($_POST)) {
		$departamento = $_POST['add_departamento'];
		$pisos = $_POST['pisos_id'];




		mysqli_query($conexion, "INSERT INTO `atencion_ciudadano`.`departamentos` (`id_departamento`, `add_departamento`,`pisos_id`) VALUES (NULL, '$departamento', '$pisos')")
  		or die("Problemas en el select".mysqli_error($conexion));
  			}

  			?>

  			 <SCRIPT LANGUAGE="javascript"> 
         alert("Departamento registrado existosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../Departamentos.php">