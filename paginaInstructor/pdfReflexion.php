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
    $pdf->cell(30,15,utf8_decode('') ,0,0);
    $pdf->cell(110,15,utf8_decode('ANEXO REFLEXIONES ESTRUCTURADAS Y CIERRES (DEBRIEFING)') ,0,1);
    $pdf->MultiCell(190,5,utf8_decode('Reflexión: Las personas NO aprenden de la experiencia, de otro modo no se cometerían las mismas equivocaciones. Se aprende de REFLEXIONAR sobre la experiencia. Esta, la experiencia, es el detonante para la reflexión/aprendizaje. Cuando el instructor aplica el enfoque experiencial, no es la experiencia de la que se aprende sino de las preguntas posteriores sobre los hechos, las emociones, las aplicaciones, las cuales comparten con sus compañeros. La reflexión desacelera la actividad, reduce las reacciones negativas y genera conciencia. Sin embargo, el principal reto de la reflexión es mantener el equilibrio entre la estructura y la fluidez; por eso es importante preparar algunas preguntas clave antes de la reflexión. Durante esta, permita comentarios espontáneos pero si la discusión se sale de las manos, utilice las preguntas preparadas. No todas las actividades requieren reflexión, sino que depende de los objetivos y de los RA de la guía de aprendizaje. Las reflexiones son utilizadas al final de una actividad, al cierre de una sesión de formación o al finalizar el programa formación o un evento/taller.
La reflexión de cierre es confidencial no se juzga, no se evalúa no se critica, no se ataca, no se defiende. Se escucha, se apoya
A continuación encontrará algunas opciones de reflexión estructurada y de cierres:') ,0,1,);
$pdf->cell(30,5,utf8_decode('') ,0,1);
	while($row = $result->fetch_assoc())
	{  
		$pdf->Cell(7,7,utf8_decode($row['idReflexionC']),0,0,'B');
		$pdf->Cell(78,7,utf8_decode($row['tituloRef']),0,1,'B');
		$pdf->MultiCell(190,5,utf8_decode($row['descripcionRef']) ,0,2,);
	
		$imagen="../images/".$row['imagenRef'];
		$pdf->Cell( 70, 42, $pdf->Image($imagen, $pdf->GetX()+23, $pdf->GetY()+3, 45, 38), 0, 2, 'C', false );
		$pdf->Cell(180,1,'',10,1,'',0);
	}
	$pdf->Output();
?>