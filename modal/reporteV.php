<?php

if(strlen($_GET['date1'])>0 and strlen($_GET['date2'])>0){

$date1 = date("Y-m-d", strtotime($_GET['date1']));
$date2 = date("Y-m-d", strtotime($_GET['date2']));

	list($dia,$mes,$anio)=explode("/",$_GET['date1']);
	$date1="$anio-$mes-$dia";

	
	list($dia,$mes,$anio)=explode("/",$_GET['date2']);
	$date2="$anio-$mes-$dia";
	
	$sWhere="WHERE `fecha` BETWEEN '$date1' AND '$date2'";
}else{

	$sWhere="";
	$date1="";
	$date2="";

}
require('../fpdf/fpdf.php');
require('../config/conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../img/zona.jpg' , 10 ,8, 10 , 13,'JPG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Zona Educativa del Estado Guarico', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE VISITANTES', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'Desde: '.$date1.' hasta: '.$date2, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Cedula', 0);
$pdf->Cell(25, 8, 'Nombre', 0);
$pdf->Cell(30, 8, 'Apellido', 0);
$pdf->Cell(35, 8, 'Fecha de Registro', 0);
$pdf->Cell(40, 8, 'Motivo', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA

$conexion=conectarse();
$publico = mysqli_query($conexion, "SELECT count(*) FROM publico $sWhere")or die("Problemas en el select:".mysqli_error($conexion));;
$publico2 = mysqli_query($conexion, "SELECT * FROM publico $sWhere")or die("Problemas en el select:".mysqli_error($conexion));;



while($public = mysqli_fetch_array($publico2)){
	$pdf->Cell(15, 8,$public['cedula'], 0);
	$pdf->Cell(25, 8,$public['nombre'], 0);
	$pdf->Cell(30, 8,$public['apellido'], 0);
	$pdf->Cell(35, 8,$public['fecha'], 0);
	$pdf->Cell(40, 8,$public['motivo'], 0);	

	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);
while($public = mysqli_fetch_array($publico)){
$pdf->Cell(31,8,'Total Visitantes: '.$public['count(*)'].'', 0);
}
$pdf->Output('reporte.pdf','D');
?>