
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

<div class="velikinaslov">Latest specs</div>
<?php
    /*$recenzije = file_get_contents('xmls/PhoneSpecs.xml');
    if(strlen($recenzije) != 0)
    {
        $sveRecenzije = simplexml_load_file('xmls/PhoneSpecs.xml');*/
		$i = 0;
		$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	    $veza->exec("set names utf8");
	    $news = $veza->query("SELECT * FROM (SELECT * FROM phones ORDER BY id DESC LIMIT 3) as r ORDER BY id DESC");
	    if (!$news) {
	          $greska = $veza->errorInfo();
	          print "SQL greška: " . $greska[2];
	          exit();
	     }
		foreach ($news as $new) {
			echo("<a href='FPPhoneSpecs.php?idbrand=".$new["idbrand"]."&id=".$new["id"]."'><div class='topvijest'>");
			echo("<img src='{$new["slika"]}' alt='{$new["naslov"]}'>");
			echo("<div class='naslovtopvijest'><span>{$new["naslov"]}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
		}
	
?>
<div class="velikinaslov">Latest reviews</div>
<?php
    /*$recenzije = file_get_contents('xmls/Reviews.xml');
    if(strlen($recenzije) != 0)
    {
        $sveRecenzije = simplexml_load_file('xmls/Reviews.xml');*/
		$i = 0;
		$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	    $veza->exec("set names utf8");
	    if (!$veza) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    $news = $veza->query("SELECT * FROM (SELECT * FROM reviews ORDER BY id DESC LIMIT 3) as r ORDER BY id DESC");
	    if (!$news) {
	          $greska = $veza->errorInfo();
	          print "SQL greška: " . $greska[2];
	          exit();
	     }
		foreach ($news as $new)
        {
			echo("<a href='FPReview.php?id={$new["id"]}'><div class='topvijest'>");
			echo("<img src='{$new["slika"]}' alt='{$new["naslov"]}'>");
			echo("<div class='naslovtopvijest'><span>{$new["naslov"]}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
		}
	
?>
<div class="velikinaslov">News</div>
<?php
    /*$novosti = file_get_contents('xmls/News.xml');
    if(strlen($novosti) != 0)
    {
        $sveNovosti = simplexml_load_file('xmls/News.xml');*/
		$i = 0;
		$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	    $veza->exec("set names utf8");
	    if (!$veza) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    
	    $news = $veza->query("SELECT * FROM (SELECT * FROM news ORDER BY id DESC LIMIT 3) as r ORDER BY id DESC");
	    if (!$news) {
	          $greska = $veza->errorInfo();
	          print "SQL greška: " . $greska[2];
	          exit();
	     }
		foreach ($news as $new)
        {
			echo("<a href='FPNew.php?id={$new["id"]}'><div class='vijest'>");
			$tekst = substr($new["tekst"], 0, 400);
			$tekst = $tekst."...";
			echo("<img src='{$new["slika"]}' alt='Problem sa prikazivanjem slike' class='slikareview'><div class='sadrzajvijesti'>".$tekst."</div>");
			echo("<div class='vijestnaslov'><span>{$new["naslov"]}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
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