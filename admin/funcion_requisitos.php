<?php



include("config/conexion.php");
$conexion=conectarse();

$acentos= $conexion->query("SET NAMES 'utf8'");


$el_bravo = $_POST['bravo'];
$registros = mysqli_query($conexion, "SELECT * FROM requisitos INNER JOIN tramites ON (requisitos.id_requisitos=tramites.requisitos_id)  WHERE id_tramites = $el_bravo");




while ( $row=mysqli_fetch_array($registros))
{
	 echo '' . $row['nombre_requisito'] . '' . "\n";
}