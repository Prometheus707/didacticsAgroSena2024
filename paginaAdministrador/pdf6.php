<?php
require '../conexiondb.php';
include 'plantilla2.php';
/*
$id =$_POST['id_p'];
$sql = "SELECT * FROM proyectos WHERE idProyecto = ".$id;
$result = mysqli_query($conecta,$sql);
if ($result->num_rows > 0){
	//$row = $result->fetch_assoc();*/
	// $id=$_GET['id'];
	     mysqli_set_charset($conecta,'utf8');

	$query = "SELECT DISTINCT * FROM frases ";
	$result =  mysqli_query($conecta,$query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);


	//$pdf->Cell(25,6,'IdProyecto',1,0,'C',1);
	$pdf->Cell(20,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Descripción',1,0,'C',1);
	// $pdf->Cell(80,6,'descripcion',1,8,'C',1);
	$pdf->Cell(30,6,'pdf',1,0,'C',1);

	// $pdf->Cell(18,6,'Duracion',1,0,'C',1);
	// $pdf->Cell(20,6,'Cod Ficha',1,0,'C',1);
	// $pdf->Cell(17,6,'Cod Prog',1,0,'C',1);
	// $pdf->Cell(40,6,'proyecto Final',1,1,'C',1);


	$pdf->SetFont('Arial','',8);
	while($row = $result->fetch_assoc())
	{
		$pdf->Cell(20,19,utf8_decode($row['nombreFrases']),1,0,'C');
		$pdf->Cell(30,19,utf8_decode($row['descripcionFrases']),1,0,'C');
		$pdf->Cell(30,19,utf8_decode($row['pdfFrases']),1,0,'C');

	}
	$pdf->Output();
?>
