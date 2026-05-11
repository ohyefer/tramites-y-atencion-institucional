<?php



include("config/conexion.php");
$conexion=conectarse();

$acentos= $conexion->query("SET NAMES 'utf8'");


$el_continente = $_POST['continente'];
$registros = mysqli_query($conexion, "SELECT * FROM tramites WHERE tipopersonal_id = $el_continente");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{

	 echo '<option value="' . $row['id_tramites']. '">' . $row['nombre_tramite'] . '</option>' . "\n";
}