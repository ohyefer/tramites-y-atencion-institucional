<?php

include("config/conexion.php");
$conexion=conectarse();
$acentos= $conexion->query("SET NAMES 'utf8'");

 $registros = mysqli_query($conexion, "SELECT * FROM pisos");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{
	echo '<option value="' . $row['id_pisos']. '">' . $row['add_piso'] . '</option>' . "\n";
}
