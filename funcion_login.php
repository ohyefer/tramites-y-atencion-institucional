<?php



include("config/conexion.php");
$conexion=conectarse();

$acentos= $conexion->query("SET NAMES 'utf8'");


$el_continente = $_POST['continente'];
$registros = mysqli_query($conexion, "SELECT * FROM departamentos INNER JOIN login ON (departamentos.id_departamento=login.departamento_id) WHERE departamento_id = $el_continente AND cargo_id=2");


echo    '<option value="0">Seleccione</option>';
while ( $row=mysqli_fetch_array($registros))
{

	 echo '<option value="' . $row['id_departamento']. '">' . $row['nombre_apellido'] . '</option>' . "\n";
}