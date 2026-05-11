<?php



		
        require('../config/conexion.php');
        $conexion=conectarse();
        $departamento=$_GET['id_departamento'];
		$conexion->query("DELETE FROM departamentos WHERE id_departamento='$departamento'");
		

?>


<script language="javascript"type="text/javascript">
						alert("Departamento Eliminado");
			</script>

<meta http-equiv='refresh' content='0; url=../departamentos.php' />
