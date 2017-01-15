<?php

		require('fpdf.php');
		$id = $_GET["id"];
		$idbrand = $_GET["idbrand"];
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial", "B", 14);
	
		$pdf->Cell(100, 10, "", 0, 1);
		$fajl = glob('xmls/PhoneSpecs.xml');
			
			$xml= simplexml_load_file('xmls/PhoneSpecs.xml'); 
			$phone = $xml->spec;
			foreach ($xml->spec as $spec) {
				if($id == $spec->id && $idbrand == $spec->idbrand) {
						

						
						$pdf->Cell(100, 100, "", 0, 1, 'C');
						$pdf->Cell(180, 10, $spec->naslov, 1, 1, 'C');
						$pdf->Cell(180, 10, $spec->releaseddate, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->system, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->memory, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->cameraveliki, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->cameramali, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->displayveliki, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->displaymali, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->ramveliki, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->rammali, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->batteryveliki, 1, 1,'C');
						$pdf->Cell(180, 10, $spec->batterymali, 1, 1,'C');
						$pdf->Image("$spec->slika", 30, 10, -200);
						break;
					}
				}
		$pdf->Output('D','PhoneSpecs.pdf');
		?>