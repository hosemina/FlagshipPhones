

<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">
<?php
    
    $idbrand=$_GET["idbrand"];
    echo($idbrand);
echo('<form enctype="multipart/form-data" method="post" action="dodajSpecifikacije.php?idbrand='.$idbrand.'" name="changer">');
?>
<div class="specs-velikinaslov"><input type='text' name='naslovtekst' id='naslovtekst' placeholder="Naziv telefona"></div>

<div class="specs"><div class="slikaspecs">
<br>
<br>
<br>
<input name="imagespecs" accept="image/jpeg" type="file" id ="imagespecs"></div>
<div class="sveskupa">
<div class="redspecs">
	<ul>
		<li id="releasedDate" class="listaspecs"><input type='text' name='releaseddatetext' id='releaseddatetext' placeholder="Released date"> </li>
		<li id="system" class ="listaspecs"><input type='text' name='systemtext' id='systemtext' placeholder="System"></li>
		<li id="memory" class ="listaspecs"><input type='text' name='memorytext' id='memorytext' placeholder="Memory"></li>
	</ul>
</div>
<div id ="camera" class ="kolonaspecs">
	<img src="camera.png" class="malaslicica" alt="Camera">
	<div class="tekst-kolonaspecs"><input type='text' name='cameravelikitekst' id='cameravelikitekst' placeholder="Camera"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='cameramalitekst' id='cameramalitekst' placeholder="Camera video"></div>
</div>
<div id ="display" class ="kolonaspecs">
	<img src="size.png" class="malaslicica" alt="Display">
	<div class="tekst-kolonaspecs"><input type='text' name='displayvelikitekst' id='displayvelikitekst' placeholder="Display '' "></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='displaymalitekst' id='displaymalitekst' placeholder="Display pixels"></div>
</div>
<div id ="ram" class ="kolonaspecs">
	<img src="ram.png" class="malaslicica" alt="RAM">
	<div class="tekst-kolonaspecs"><input type='text' name='ramvelikitekst' id='ramvelikitekst' placeholder="Ram"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='rammalitekst' id='rammalitekst' placeholder="Processor"></div>
</div>
<div id ="battery" class ="kolonaspecs">
	<img src="battery.png" class="malaslicica" alt="Battery">
	<div class="tekst-kolonaspecs"><input type='text' name='batteryvelikitekst' id='batteryvelikitekst' placeholder="Battery [mAh]"></div>
	<div class="malitekst-kolonaspecs"><input type='text' name='batterymalitekst' id='batterymalitekst' placeholder="Battery"></div>
</div>
</div>


<div class="gallery">
<div class="velikinaslov">Slike - click to zoom</div>

<input name="image1" accept="image/jpeg" type="file">

<input name="image2" accept="image/jpeg" type="file">
<input name="image3" accept="image/jpeg" type="file">
<input name="image4" accept="image/jpeg" type="file">


</div>

</div><input value="Submit" type="submit">
</form>


<?php
include_once("fonoapi-master/fonoapi-v1.php");

    $apiKey = "c4f79aace6d97ca8d4ba7ea8ab715085fc86abdf8cf72509"; // get your token key here - https://fonoapi.freshpixl.com
    $fonoapi = fonoApi::init($apiKey);

        try {

            $res = $fonoapi::getDevice("S7"); // the device you need to get details here

            foreach ($res as $mobile) {
                if (!empty($mobile->DeviceName))    echo "Device : ". $mobile->DeviceName . "<br>";
                if (!empty($mobile->Brand))         echo "Brand : ". $mobile->Brand . "<br>";
                if (!empty($mobile->cpu))           echo "Cpu : " . $mobile->cpu . "<br>";
                if (!empty($mobile->status))        echo "Status : " . $mobile->status . "<br>";
                if (!empty($mobile->dimensions))    echo "Dimensions : " . $mobile->dimensions . "<br>";
                if (!empty($mobile->_4g_bands))     echo "4g : " .$mobile->_4g_bands . "<br>";
            }

        } catch (Exception $e) {
            echo "ERROR : " . $e->getMessage();
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