<?php

include("../config/conexion.php");
$conexion=conectarse();
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));

if (!empty($_POST['date1']) and  !empty($_POST['date1'])){
	list($dia,$mes,$anio)=explode("/",$_POST['date1']);
	$date1="$anio-$mes-$dia";

	
	list($dia,$mes,$anio)=explode("/",$_POST['date2']);
	$date2="$anio-$mes-$dia";
	
	$sWhere="WHERE `fecha_tra` BETWEEN '$date1' AND '$date2'";
	
} else {
	$sWhere="";	
}



$total   = mysqli_query($conexion, "SELECT count(*) FROM registro_tramites  $sWhere")or die("Problemas en el select".mysqli_error($conexion));

while ($row = mysqli_fetch_array($total)) {
			echo 


			'
			Tramites Registrado por Fecha:&nbsp;'.$row['count(*)'].'';
}

echo '<br>';
echo '<br>';
echo '<br>';

$q_book = mysqli_query($conexion, "SELECT * FROM `registro_tramites` $sWhere ORDER BY `fecha_tra` DESC") or die("Problemas en el select:". mysqli_error($conexion));




echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
							<th>Cédula</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th style = "width:20%;">Fecha de Registro</th>
							
            
     

			</tr>';



$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
	
	echo '<tr>
		<td>'.$f_book['cedula_tra'].'</td>
		<td>'.$f_book['nombre_tra'].'</td>
		<td>'.$f_book['apellido_tra'].'</td>
		<td>'.date("d/m/Y", strtotime($f_book['fecha_tra'])).'</td>


	</tr>'

	?>
	<?php
}
}
else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';

echo '<br>';
echo '<br>';

?>
