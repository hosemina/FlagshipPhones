<?php

		require('fpdf.php');
		$id = $_GET["id"];
		$idbrand = $_GET["idbrand"];
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial", "B", 14);
	
		$pdf->Cell(100, 10, "", 0, 1);
		
			$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
            
            $sve = $veza->query("select naslov, slika, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones where id=".$id);
            if (!$sve) {
                  $greska = $veza->errorInfo();
                  print "SQL greška: " . $greska[2];
                  exit();
             }
             foreach ($sve as $novost) {
                 $phone = $novost;
             }
						
						$pdf->Cell(100, 100, "", 0, 1, 'C');
						$pdf->Cell(180, 10, $phone["naslov"], 1, 1, 'C');
						$pdf->Cell(180, 10, $phone["releaseddate"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["system"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["memory"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["cameraveliki"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["cameramali"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["displayveliki"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["displaymali"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["ramveliki"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["rammali"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["batteryveliki"], 1, 1,'C');
						$pdf->Cell(180, 10, $phone["batterymali"], 1, 1,'C');
						$pdf->Image($phone['slika'], 30, 10, -200);
					
					
				
		$pdf->Output('D','PhoneSpecs.pdf');
		?>