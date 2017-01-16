
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<?php
    
        //$sveRecenzije = simplexml_load_file('xmls/Reviews.xml');
        echo("<div class='velikinaslov'>Reviews</div>");
        $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	    $veza->exec("set names utf8");
	    if (!$veza) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    $news = $veza->query("select id, naslov, slika, tekst from reviews order by id desc");
	    if (!$news) {
	          $greska = $veza->errorInfo();
	          print "SQL greška: " . $greska[2];
	          exit();
	     }
        foreach ($news as $new)
        {
			echo("<a href='FPReview.php?id={$new["id"]}'><div class='vijest'>");
			$tekst = substr($new["tekst"], 0, 400);
			$tekst = $tekst."...";
			echo("<img src='{$new["slika"]}' alt='Problem sa prikazivanjem slike' class='slikareview'><div class='sadrzajvijesti'>".htmlspecialchars($tekst, ENT_QUOTES, 'UTF-8')."</div>");
			echo("<div class='vijestnaslov'><span>".htmlspecialchars($new["naslov"], ENT_QUOTES, 'UTF-8')."</span></div>");
			echo('</div></a>');
		}

	if(isset($_SESSION["admin"])) {
	echo('<div class="mogucnosti"><a href="FPReviewsForma.php"><img src="dodaj.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a> </div>');}
	?>
	
</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>