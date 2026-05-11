<?php
function conectarse()
{
$conexion = mysqli_connect("localhost", "root", "", "atencion_ciudadano");	
if ($conexion->connect_errno)
{
echo'ERROR CONECTANDO CON EL SERVIDOR' . $conexion->connect_errno ;
exit();
}
return $conexion;
}
conectarse();

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
?>
