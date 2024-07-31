<?php
include 'plantilla2.php';
require '../conexiondb.php';
header('Content-Type: text/html; charset=ISO-8859-1');
/*
$id =$_POST['id_p'];
$sql = "SELECT * FROM proyectos WHERE idProyecto = ".$id;
$result = mysqli_query($conecta,$sql);
if ($result->num_rows > 0){
	//$row = $result->fetch_assoc();*/
	// $id=$_GET['id'];

	     mysqli_set_charset($conecta,'utf8');

	$query = "SELECT DISTINCT * FROM reflexioncierre";
	$result =  mysqli_query($conecta,$query);
	$conecta->set_charset("utf8");
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);


	//$pdf->Cell(25,6,'IdProyecto',1,0,'C',1);
	// $pdf->Cell(18,7,'id',1,0,'C',1);
	// $pdf->Cell(70,6,'Nombre',1,0,'C',1);

	$pdf->SetFont('Arial','',11);
	while($row = $result->fetch_assoc())
	{

		$pdf->Cell(78,7,utf8_decode($row['tituloRef']),0,1,'B');
		$pdf->MultiCell(190,5,utf8_decode($row['descripcionRef']) ,0,2,);


		$imagen="../images/".$row['imagenRef'];
		$pdf->Cell( 70, 42, $pdf->Image($imagen, $pdf->GetX()+23, $pdf->GetY()+3, 45, 38), 0, 2, 'C', false );
		$pdf->Cell(180,1,'',10,1,'',0);
	}
	$pdf->Output();
?>
