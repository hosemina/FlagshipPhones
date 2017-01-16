
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">
<?php
    $id=$_GET["id"];
    $idbrand=$_GET["idbrand"];
    /*$sve = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml'); 
    foreach($sve->spec as $specifikacija)
    {
        if($specifikacija->id == $id) {
            $specVrijednosti = $specifikacija;
        }
    }*/
    $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
    $veza->exec("set names utf8");
    if (!$veza) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sve = $veza->query("select idbrand, naslov, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones where id=".$id);
    if (!$sve) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     foreach ($sve as $novost) {
         $phone = $novost;
     }

echo('<form enctype="multipart/form-data" method="post" action="izmijeniSpecifikaciju.php?id='.$id.'&idbrand='.$phone["idbrand"].'" name="changer">');
?>
<div class="specs-velikinaslov"><input type='text' name='naslovtekst' id='naslovtekst' placeholder="Naziv telefona" value="<?php echo($phone["naslov"]);?>"></div>

<div class="specs"><div class="slikaspecs">
</div>
<div class="sveskupa">
<div class="redspecs">
	<ul>
		<li id="releasedDate" class="listaspecs"><input type='text' name='releaseddatetext' id='releaseddatetext' placeholder="Released date" value="<?php echo($phone["releaseddate"]);?>"> </li>
		<li id="system" class ="listaspecs"><input type='text' name='systemtext' id='systemtext' placeholder="System" value="<?php echo($phone["system"]);?>"></li>
		<li id="memory" class ="listaspecs"><input type='text' name='memorytext' id='memorytext' placeholder="Memory" value="<?php echo($phone["memory"]);?>"></li>
	</ul>
</div>
<div id ="camera" class ="kolonaspecs">
	<img src="camera.png" class="malaslicica" alt="Camera">
	<div class="tekst-kolonaspecs"><input type='text' name='cameravelikitekst' id='cameravelikitekst' placeholder="Camera" value="<?php echo($phone["cameraveliki"]);?>"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='cameramalitekst' id='cameramalitekst' placeholder="Camera video" value="<?php echo($phone["cameramali"]);?>"></div>
</div>
<div id ="display" class ="kolonaspecs">
	<img src="size.png" class="malaslicica" alt="Display">
	<div class="tekst-kolonaspecs"><input type='text' name='displayvelikitekst' id='displayvelikitekst' placeholder="Display '' " value="<?php echo($phone["displayveliki"]);?>"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='displaymalitekst' id='displaymalitekst' placeholder="Display pixels" value="<?php echo($phone["displaymali"]);?>"></div>
</div>
<div id ="ram" class ="kolonaspecs">
	<img src="ram.png" class="malaslicica" alt="RAM">
	<div class="tekst-kolonaspecs"><input type='text' name='ramvelikitekst' id='ramvelikitekst' placeholder="Ram" value="<?php echo($phone["ramveliki"]);?>"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='rammalitekst' id='rammalitekst' placeholder="Processor" value="<?php echo($phone["rammali"]);?>"></div>
</div>
<div id ="battery" class ="kolonaspecs">
	<img src="battery.png" class="malaslicica" alt="Battery">
	<div class="tekst-kolonaspecs"><input type='text' name='batteryvelikitekst' id='batteryvelikitekst' placeholder="Battery [mAh]" value="<?php echo($phone["batteryveliki"]);?>"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='batterymalitekst' id='batterymalitekst' placeholder="Battery" value="<?php echo($phone["batterymali"]);?>"></div>
</div>
</div>




</div><input value="Azuriraj" type="submit">
</form>



</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>