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
		 
		 $query = "SELECT DISTINCT * FROM tda  inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='1' order by idTda AsC ";
		 $result =  mysqli_query($conecta,$query);
		 
		 $pdf = new PDF();
		 $pdf->AliasNbPages();
		 $pdf->AddPage();
		 $pdf->SetFillColor(232,232,232);
		 $pdf->SetFont('Arial','B',9);
		 $pdf->SetFont('Arial','',9);
		 $pdf->Cell(80,6,utf8_decode('Reporte Técnicas Didácticas Activas: '),0,1,'');
		 $pdf->Ln(5);
		 $pdf->Cell(80,8,utf8_decode('Reflexión Inicial: '),0,1,'');
	 
		 while($row = $result->fetch_assoc())
		 {
			 $pdf->Cell(18,6,'id',1,0,'C',1);
			 $pdf->Cell(82,6,'Nombre',1,0,'C',1);
			 $pdf->Cell(80,6,'Ruta pdf',1,1,'C',1);
			 $pdf->Cell(18,14,utf8_decode($row['idTda']),1,0,'C');
			 $pdf->Cell(82,14,utf8_decode($row['nombreTda']) ,1,0,'C');
			 $pdf->Cell(80,14,utf8_decode($row['rutaPDF']),1,1,'C');
			 $pdf->Cell(180,7,utf8_decode('Descripción'),1,1,'C',9);
			 $pdf->MultiCell(180,8,utf8_decode($row['descripcionTda']),1,10,'' );
			 $pdf->Cell(50,7,utf8_decode('Tipo Técnica Didáctica:'),1,0,'C',9);
			 $pdf->MultiCell(130,7,utf8_decode($row['nombreTipoTda']),1,10,'' );
			 $pdf->Ln(5);
			 $pdf->Ln(5);
			 $pdf->Ln(5);
		 }
		 $pdf->Cell(80,8,utf8_decode('Identificación De Conocimiento: '),0,1,'');
		 $pdf->Ln(5);
		 
		 $query2 = "SELECT DISTINCT * FROM tda  inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='2' order by idTda AsC ";
		 $result2 =  mysqli_query($conecta,$query2);
		 
		 
		 while($row2 = $result2->fetch_assoc())
		 {
			 $pdf->Cell(18,6,'id',1,0,'C',1);
			 $pdf->Cell(82,6,'Nombre',1,0,'C',1);
			  $pdf->Cell(80,6,'Ruta pdf',1,1,'C',1);
			 $pdf->Cell(18,14,utf8_decode($row2['idTda']),1,0,'C');
			 $pdf->Cell(82,14,utf8_decode($row2['nombreTda']) ,1,0,'C');
			 $pdf->Cell(80,14,utf8_decode($row2['rutaPDF']),1,1,'C');
			 $pdf->Cell(180,7,utf8_decode('Descripción'),1,1,'C',9);
			 $pdf->MultiCell(180,8,utf8_decode($row2['descripcionTda']),1,10,'' );
			 $pdf->Cell(50,7,utf8_decode('Tipo Técnica Didáctica:'),1,0,'C',9);
			 $pdf->MultiCell(130,7,utf8_decode($row2['nombreTipoTda']),1,10,'' );
			 $pdf->Ln(5);
			 $pdf->Ln(5);
		 }
		 $pdf->Ln(5);
		 $pdf->Cell(80,8,utf8_decode('Apropiación De Conocimiento: '),0,1,'');
		 $pdf->Ln(5);
		 $query3 = "SELECT DISTINCT * FROM tda  inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='3' order by idTda AsC ";
		 $result3 =  mysqli_query($conecta,$query3);
		 
		 
		 while($row3 = $result3->fetch_assoc())
		 {
			 $pdf->Cell(18,6,'id',1,0,'C',1);
			 $pdf->Cell(82,6,'Nombre',1,0,'C',1);
			  $pdf->Cell(80,6,'Ruta pdf',1,1,'C',1);
			 $pdf->Cell(18,14,utf8_decode($row3['idTda']),1,0,'C');
			 $pdf->Cell(82,14,utf8_decode($row3['nombreTda']) ,1,0,'C');
			 $pdf->Cell(80,14,utf8_decode($row3['rutaPDF']),1,1,'C');
			 $pdf->Cell(180,7,utf8_decode('Descripción'),1,1,'C',9);
			 $pdf->MultiCell(180,8,utf8_decode($row3['descripcionTda']),1,10,'' );
			 $pdf->Cell(50,7,utf8_decode('Tipo Técnica Didáctica:'),1,0,'C',9);
			 $pdf->MultiCell(130,7,utf8_decode($row3['nombreTipoTda']),1,10,'' );
			 $pdf->Ln(5);
			 $pdf->Ln(5);
			 
		 }
	 
		 $pdf->Ln(5);
		 $pdf->Cell(80,8,utf8_decode('Transferencia De Conocimiento: '),0,1,'');
		 
	 
		 $query4 = "SELECT DISTINCT * FROM tda  inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='4' order by idTda AsC ";
		 $result4 =  mysqli_query($conecta,$query4);
		 
		 
		 while($row4 = $result4->fetch_assoc())
		 {
			 $pdf->Cell(18,6,'id',1,0,'C',1);
			 $pdf->Cell(82,6,'Nombre',1,0,'C',1);
			  $pdf->Cell(80,6,'Ruta pdf',1,1,'C',1);
			 $pdf->Cell(18,14,utf8_decode($row4['idTda']),1,0,'C');
			 $pdf->Cell(82,14,utf8_decode($row4['nombreTda']) ,1,0,'C');
			 $pdf->Cell(80,14,utf8_decode($row4['rutaPDF']),1,1,'C');
			 $pdf->Cell(180,7,utf8_decode('Descripción'),1,1,'C',9);
			 $pdf->MultiCell(180,8,utf8_decode($row4['descripcionTda']),1,10,'' );
			 $pdf->Cell(50,7,utf8_decode('Tipo Técnica Didáctica:'),1,0,'C',9);
			 $pdf->MultiCell(130,7,utf8_decode($row4['nombreTipoTda']),1,10,'' );
			 $pdf->Ln(5);
			 $pdf->Ln(5);
		 }
		 $pdf->Output();
?>