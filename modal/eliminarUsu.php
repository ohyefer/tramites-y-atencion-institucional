<?php



		
        require('../config/conexion.php');
        $conexion=conectarse();
        $user=$_GET['username'];
		$conexion->query("DELETE FROM login WHERE username='$user'");
		

?>


<script language="javascript"type="text/javascript">
						alert("Usuario Eliminado");
			</script>

<meta http-equiv='refresh' content='0; url=../usuarios.php' />
