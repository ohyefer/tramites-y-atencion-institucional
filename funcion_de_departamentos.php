<?php



include("config/conexion.php");
$conexion=conectarse();

$acentos= $conexion->query("SET NAMES 'utf8'");


$el_continente = $_POST['continente'];
$registros = mysqli_query($conexion, "SELECT * FROM departamentos INNER JOIN pisos ON (departamentos.pisos_id=pisos.id_pisos) WHERE pisos_id = $el_continente");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{

	 echo '<option value="' . $row['id_pisos']. '">' . $row['add_departamento'] . '</option>' . "\n";
}