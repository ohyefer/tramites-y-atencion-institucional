<?php 
		require('../config/conexion.php');
        $conexion=conectarse();
		

		if(isset($_POST['submit'])){

		
		
		$nombre = $_POST['nombre_p'];
		$apellido = $_POST['apellido_p'];
		$cedula = $_POST['cedula_p'];
        $fechai = $_POST['fecha_inicio'];
		$fechap = $_POST['fecha_p'];
		$dep = $_POST['departamento_id'];
		$log = $_POST['login_id'];
	    $est = $_POST['estatu_id'];
		

		$result=mysqli_query($conexion, "INSERT INTO `atencion_ciudadano`.`agregar_pase` (`id_agregarp`, `nombre_p`, `apellido_p`,`cedula_p`, `fecha_inicio` , `fecha_p`, `departamento_id`, `login_id`, `estatu_id`  ) VALUES (NUll,'$nombre', '$apellido', '$cedula', '$fechai', '$fechap','$dep','$log','$est' )");

		
 
}

?>
	 <SCRIPT LANGUAGE="javascript"> 
         alert("Pase accedido existosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../registrado.php">
