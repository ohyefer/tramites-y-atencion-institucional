<?php

include("config/conexion.php");
$conexion=conectarse();
$acentos= $conexion->query("SET NAMES 'utf8'");

 $registros = mysqli_query($conexion, "SELECT * FROM detalles_tramites INNER JOIN pisos ON (detalles_tramites.pisos_id=pisos.id_pisos) ");

 echo  '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{
	echo '<option value="' . $row['pisos_id']. '">' . $row['add_piso'] . '</option>' . "\n";
}
