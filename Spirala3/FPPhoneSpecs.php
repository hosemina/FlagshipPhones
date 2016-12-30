

<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">
<?php 
$id = $_GET["id"];
$idbrand = $_GET["idbrand"];
$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id) {
                echo('<div class="specs-velikinaslov">'.$x->naslov.'</div>');
                echo('<div class="specs">');
                echo('<center><img src="'.$x->slika.'" class="slikaspecs" alt="Problem sa prikazivanjem slike"></center>');
                echo('<div class="sveskupa"><div class="redspecs">');
	            echo('<ul>');
		        echo('<li id="releasedDate" class="listaspecs">'.$x->releaseddate.'</li>');
        		echo('<li id="system" class ="listaspecs">'.$x->system.'</li>');
        		echo('<li id="memory" class ="listaspecs">'.$x->memory.'</li>');
            	echo('</ul></div> <div id ="camera" class ="kolonaspecs"><img src="camera.png" class="malaslicica" alt="Camera">');
	           echo('<div class="tekst-kolonaspecs">'.$x->cameraveliki.'</div>');
	           echo('<div class="malitekst-kolonaspecs">'.$x->cameramali.'</div>');
               echo(' </div><div id ="display" class ="kolonaspecs"><img src="size.png" class="malaslicica" alt="Display">');
                echo('<div class="tekst-kolonaspecs">'.$x->displayveliki.'</div>');
	           echo('<div class="malitekst-kolonaspecs">'.$x->displaymali.'</div>');
            echo('</div><div id ="ram" class ="kolonaspecs"><img src="ram.png" class="malaslicica" alt="RAM">');
        	echo('<div class="tekst-kolonaspecs">'.$x->ramveliki.'</div>');
        	echo('<div class="malitekst-kolonaspecs">'.$x->rammali.'</div>');
            echo('</div><div id ="battery" class ="kolonaspecs"><img src="battery.png" class="malaslicica" alt="Battery">');
        	echo('<div class="tekst-kolonaspecs">'.$x->batteryveliki.'</div>');
        	echo('<div class="malitekst-kolonaspecs">'.$x->batterymali.'</div>');
            echo('</div></div>');

            
/*<div id="ModalGallery" class="modal">
  <span onclick="closeModal()" class="close">×</span>
  <img class="modal-content-gallery" id="imgmodal">
  <div id="caption"></div>
</div>*/

echo('</div>');
if(isset($_SESSION["admin"])) {
echo('<div class="mogucnosti"><a href="FPPhoneSpecsForma.php?idbrand='.$idbrand.'"><img src="dodaj.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a>  <a href="FPPhoneSpecsFormaIzmijeni.php?id='.$id.'&idbrand='.$idbrand.'"><img src="promijeni.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a>  <a href="izbrisiSpecifikaciju.php?id='.$id.'&idbrand='.$idbrand.'"><img src="obrisi.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a>  <a href="skiniPdf.php?id='.$id.'&idbrand='.$idbrand.'"><img src="pdf.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a></div>');}
else {
    echo('<div class="mogucnosti"><a href="skiniPdf.php?id='.$id.'&idbrand='.$idbrand.'"><img src="pdf.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a></div>');
}
}
}
}
?>

</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>