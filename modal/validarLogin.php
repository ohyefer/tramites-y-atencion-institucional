<?php
session_start(); // Starting Session
$error='../config/conexion.php'; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['pass'])) {
$error = "Usuario o Contraseña  es invalida";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("../config/conexion.php");

$con=conectarse();
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = $con->real_escape_string($username);
$password = $con->real_escape_string($password);


// SQL query to fetch information of registerd users and finds user match.
$query = $con->query( "SELECT * FROM  login INNER JOIN cargos ON (login.cargo_id=cargos.id_cargo) INNER JOIN pisos ON (login.pisos_id=pisos.id_pisos) INNER JOIN departamentos ON (login.departamento_id=departamentos.id_departamento) WHERE password = '$password' AND username ='$username'");

$rows = $query->num_rows;

if ($rows == 1) {

$r=mysqli_fetch_array($query, MYSQLI_ASSOC);
$id = $r['cargo_id'];
$na = $r['nombre_apellido'];
$usu = $r['username'];
$rol = $r['nombre_cargo'];
$pis = $r['add_piso'];
$dep = $r['add_departamento'];

$_SESSION['ok']="ok";
$_SESSION['usuario']=$usu;
$_SESSION['nomusuario']=$na; // Initializing Session
$_SESSION['rol']=$rol;
$_SESSION['piso']=$pis;
$_SESSION['dp']=$dep;



$query2 = $con->query("SELECT id_cargo = 'Administrador', 'Jefe de oficina', 'Registrador', 'Pase', 'Control' FROM cargos
");

	if($id == 1){

		$id = "Administrador";
		header("Location:../admin/principal.php");
		
	}
		
	if ($id == 2) {
			$id = "Jefe oficina";
			header("Location: ../principal_jefeO.php");
	}
	
	if ($id == 3) {
			$id = "Registrador";
			header("Location: ../principal_registradora.php");
	}

	if ($id == 4) {
			$id = "Pase";
			header("Location: ../principal_pase.php");

	}

	if ($id == 5) {
			$id = "Control";
			header("Location: ../control.php");

	}

$query->free();
}
 else {

header("Location: ../login.php?msj=sesion0");
}
}
}
?>