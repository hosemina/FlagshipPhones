
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
/*
$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand1.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand1.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id1) {*/
            $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
		    $veza->exec("set names utf8");
		    if (!$veza) {
		        die("Connection failed: " . mysqli_connect_error());
		    }
		    $sve = $veza->query("select idbrand, naslov, slika, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones where id=".$id1);
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
			echo('</div>');
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
/*
$specs = file_get_contents('xmls/PhoneSpecs'.$idbrand2.'.xml');

    if(strlen($specs) != 0)
    {
        $allSpecs = simplexml_load_file('xmls/PhoneSpecs'.$idbrand2.'.xml');
        foreach ($allSpecs as $x)
        {
            if($x->id == $id2) {*/
            $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
		    $veza->exec("set names utf8");
		    if (!$veza) {
		        die("Connection failed: " . mysqli_connect_error());
		    }
		    $sve = $veza->query("select idbrand, naslov, slika, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones where id=".$id2);
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
			echo('</div>');
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
