
<?php
include 'header.php';
?>

<div class="container2"><article><div id ="SadrzajStranice">

 
<div class="velikinaslov" >Compare</div>


<div class="compare" id="compare1">	
<br>
<br>
<div class="velikinaslovcompare">Izaberite telefon:</div>
<div id="searchd">
  <form id="search" >
	<input name="q" type="text" id="trazi" size="40" placeholder="Search..." onkeyup="showResultCompare1(this.value)">
	<div id="livesearchcompare1" class="modalmalicompare"></div>
  	</form>
 </div>
 <br>
<br>
<br>
<br>
<br>
<br>
	<?php 
	if(isset($_GET["id"]) && isset($_GET["idbrand"])) {
		$_SESSION["id1"] = $_GET["id"];
		$_SESSION["idbrand1"] = $_GET["idbrand"];
	}
	if(isset($_SESSION["id1"]) && isset($_SESSION["idbrand1"])) {
	$id1 = $_SESSION["id1"];
	$idbrand1 = $_SESSION["idbrand1"];

$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand1.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand1.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id1) {
            echo('<div class="specs-velikinaslov">'.$x->naslov.'</div>');
            echo('<div class="specs">');
            echo('<center><img src="'.$x->slika.'" class="slikaspecscompare" alt="Problem sa prikazivanjem slike"></center>');
            echo('<div class="sveskupacompare"><div class="redspecs">');
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
			echo('</div>');
}
}
}
}
?>
 
</div>

<div class="compare" id="compare2">
<br>
<br>
<div class="velikinaslovcompare">Izaberite telefon:</div>
<div id="searchd">
	  <form id="search" >
		<input name="q" type="text" id="trazi" size="40" placeholder="Search..." onkeyup="showResultCompare2(this.value)">
		<div id="livesearchcompare2" class="modalmalicompare"></div>
	  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
	<?php
	if(isset($_GET["id2"]) && isset($_GET["idbrand2"])) {
		$_SESSION["id2"] = $_GET["id2"];
		$_SESSION["idbrand2"] = $_GET["idbrand2"];
	}
	if(isset($_SESSION["id2"]) && isset($_SESSION["idbrand2"])) {
	$id2 = $_SESSION["id2"];
	$idbrand2 = $_SESSION["idbrand2"];

$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand2.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand2.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id2) {
            echo('<div class="specs-velikinaslov">'.$x->naslov.'</div>');
            echo('<div class="specs">');
            echo('<center><img src="'.$x->slika.'" class="slikaspecscompare" alt="Problem sa prikazivanjem slike"></center>');
            echo('<div class="sveskupacompare"><div class="redspecs">');
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
			echo('</div>');
}
}
}
}
?>

</div>

</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>
