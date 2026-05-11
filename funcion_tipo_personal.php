<?php

include("config/conexion.php");
$conexion=conectarse();
$acentos= $conexion->query("SET NAMES 'utf8'");

 $registros = mysqli_query($conexion, "SELECT * FROM tipo_personal");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{
	echo '<option value="' . $row['id_tipopersonal']. '">' . $row['nombre_tipo'] . '</option>' . "\n";
}
