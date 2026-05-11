<?php
session_start(); 
$error='../config/conexion.php'; 


include("../config/conexion.php");

$con=conectarse();



// SQL query to fetch information of registerd users and finds user match.
$query = $con->query( "SELECT * FROM  login INNER JOIN cargos ON (login.cargo_id=cargos.id_cargo) INNER JOIN pisos ON (login.pisos_id=pisos.id_pisos) INNER JOIN departamentos ON (login.departamento_id=departamentos.id_departamento) WHERE password = '$password' AND username ='$username'");

$rows = $query->num_rows;

if ($rows == 1) {

$r=mysqli_fetch_array($query, MYSQLI_ASSOC);
$id = $r['pisos_id'];



$_SESSION['piso']=$pis;




$query2 = $con->query("SELECT id_pisos = 'Piso 1', 'Piso 2', 'Piso 3', 'Planta baja' FROM pisos
");

	if($id == 1){

		$id = "Piso 1";
		header("Location:../tablaVis_piso1.php");
		
	}
		
	if ($id == 2) {
			$id = "Piso 2";
			header("Location: ../tablaVis_piso2.php");
	}
	
	if ($id == 3) {
			$id = "Piso 3";
			header("Location: ../tablaVis_piso3.php");
	}

	if ($id == 4) {
			$id = "Planta baja";
			header("Location: ../tablaVis_piso4.php");

	}

$query->free();
}
 else {

header("Location: ../principal_jefeO.php");
}
}
}
?>