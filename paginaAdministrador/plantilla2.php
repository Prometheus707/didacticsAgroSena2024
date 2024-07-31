<?php

	require 'reporte/fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{

			$this->Image('../images/Senalogo.svg.png', 15, 5, 17 );
			$this->SetFont('Arial','B',15);
			$this->Cell(25);

			//$this->Cell(120,10, 'Centro Agropecuario Regional Cauca ',0,0,'C');
			//$this->Cell(-120,30, utf8_decode('Reporte De Técnias Didacticas  '),0,0,'C');
			$this->Image('../images/didacticnegro.jpeg', 55, 5, 85 );
				$this->Image('../images/SENOVA.png', 155, 7, 45 );
			$this->Ln(30);
		}


		function Footer()
		{

			$this->SetY(-10);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );

		}
	}

?>
