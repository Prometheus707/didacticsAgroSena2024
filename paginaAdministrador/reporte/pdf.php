
    <?php
    include 'plantilla.php';
    require '../../conexiondb.php';
    header("Content-Type: text/html;charset=utf-8");
    /*
    $id =$_POST['id_p'];
    $sql = "SELECT * FROM proyectos WHERE idProyecto = ".$id;
    $result = mysqli_query($conecta,$sql);
    if ($result->num_rows > 0){
    //$row = $result->fetch_assoc();*/
    // $id=$_GET['id'];
        mysqli_set_charset($conecta,'utf8');

    $query = "SELECT DISTINCT * FROM tda  inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas";
    $result =  mysqli_query($conecta,$query);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();


    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',9);


    //$pdf->Cell(25,6,'IdProyecto',1,0,'C',1);
    // $pdf->Cell(18,7,'id',1,0,'C',1);
    // $pdf->Cell(70,6,'Nombre',1,0,'C',1);
    // $pdf->Cell(80,6,'descripcion',1,8,'C',1);
    // $pdf->Cell(47,6,'ruta pdf',1,0,'C',1);
    // $pdf->Cell(45,6,'enlace',1,1,'C',9);
    // $pdf->Cell(18,6,'Duracion',1,0,'C',1);
    // $pdf->Cell(20,6,'Cod Ficha',1,0,'C',1);
    // $pdf->Cell(17,6,'Cod Prog',1,0,'C',1);
    // $pdf->Cell(40,6,'proyecto Final',1,1,'C',1);


    $pdf->SetFont('Arial','',9);
    while($row = $result->fetch_assoc())
    {
    $pdf->Cell(18,6,'id',1,0,'C',1);
    $pdf->Cell(70,6,utf8_decode('Nombre'),1,0,'C',1);
    // $pdf->Cell(80,6,'descripcion',1,8,'C',1);
    $pdf->Cell(47,6,utf8_decode('Ruta pdf'),1,0,'C',1);
    $pdf->Cell(45,6,utf8_decode('Enlace'),1,1,'C',9);
    $pdf->Cell(18,19,utf8_decode($row['idTda']),1,0,'C');
    $pdf->Cell(70,19,utf8_decode($row['nombreTda']),1,0,'C');
    $pdf->Cell(47,19,utf8_decode($row['rutaPDF']),1,0,'C');
    $pdf->MultiCell(45,19,utf8_decode($row['enlace']),1,1,'');
    $pdf->Cell(180,7,utf8_decode('Descripción'),1,1,'C',9);
    $pdf->MultiCell(180,8,utf8_decode($row['descripcionTda']),1,10,'' );
    $pdf->Cell(50,7,utf8_decode('Tipo Técnica Didáctica:'),1,0,'C',9);
    $pdf->MultiCell(130,7,utf8_decode($row['nombreTipoTda']),1,10,'' );
    $pdf->Cell(180,7,'',10,1,'',0);
    }
    $pdf->Output();
    ?>
