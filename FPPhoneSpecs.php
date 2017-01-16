

<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">
<?php 
$id = $_GET["id"];
$idbrand = $_GET["idbrand"];
/*$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id) {*/
            $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
            $veza->exec("set names utf8");
            if (!$veza) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sve = $veza->query("select idbrand, naslov, slika, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones where id=".$id);
            if (!$sve) {
                  $greska = $veza->errorInfo();
                  print "SQL greška: " . $greska[2];
                  exit();
             }
             foreach ($sve as $novost) {
                 $phone = $novost;
             }
            echo('<div class="specs-velikinaslov">'.$phone["naslov"].'</div>');
            echo('<div class="specs">');
            echo('<center><img src="'.$phone["slika"].'" class="slikaspecscompare" alt="Problem sa prikazivanjem slike"></center>');
            echo('<div class="sveskupacompare"><div class="redspecs">');
            echo('<ul>');
            echo('<li id="releasedDate" class="listaspecs">'.$phone["releaseddate"].'</li>');
            echo('<li id="system" class ="listaspecs">'.$phone["system"].'</li>');
            echo('<li id="memory" class ="listaspecs">'.$phone["memory"].'</li>');
            echo('</ul></div> <div id ="camera" class ="kolonaspecs"><img src="camera.png" class="malaslicica" alt="Camera">');
            echo('<div class="tekst-kolonaspecs">'.$phone["cameraveliki"].'</div>');
            echo('<div class="malitekst-kolonaspecs">'.$phone["cameramali"].'</div>');
            echo(' </div><div id ="display" class ="kolonaspecs"><img src="size.png" class="malaslicica" alt="Display">');
            echo('<div class="tekst-kolonaspecs">'.$phone["displayveliki"].'</div>');
            echo('<div class="malitekst-kolonaspecs">'.$phone["displaymali"].'</div>');
            echo('</div><div id ="ram" class ="kolonaspecs"><img src="ram.png" class="malaslicica" alt="RAM">');
            echo('<div class="tekst-kolonaspecs">'.$phone["ramveliki"].'</div>');
            echo('<div class="malitekst-kolonaspecs">'.$phone["rammali"].'</div>');
            echo('</div><div id ="battery" class ="kolonaspecs"><img src="battery.png" class="malaslicica" alt="Battery">');
            echo('<div class="tekst-kolonaspecs">'.$phone["batteryveliki"].'</div>');
            echo('<div class="malitekst-kolonaspecs">'.$phone["batterymali"].'</div>');
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
?>

</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>