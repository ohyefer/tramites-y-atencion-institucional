<?php

include("config/conexion.php");
$conexion=conectarse();
$acentos= $conexion->query("SET NAMES 'utf8'");

 $registros = mysqli_query($conexion, "SELECT * FROM detalles_tramites INNER JOIN departamentos ON (detalles_tramites.departamento_id=departamentos.id_departamento)");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{
	echo '<option value="' . $row['id_detalle_tramite']. '">' . $row['add_departamento'] . '</option>' . "\n";
}
