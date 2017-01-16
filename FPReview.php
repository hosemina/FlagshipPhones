
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<?php
    /*$novosti = file_get_contents('xmls/Reviews.xml');
    if(strlen($novosti) != 0)
    {
        $sveNovosti = simplexml_load_file('xmls/Reviews.xml');*/
		$id = $_GET["id"];
		$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	    $veza->exec("set names utf8");
	    if (!$veza) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    $news = $veza->query("select naslov, slika, tekst from reviews where id = ".$id);
	    if (!$news) {
	          $greska = $veza->errorInfo();
	          print "SQL greška: " . $greska[2];
	          exit();
	     }
	     foreach ($news as $new) {
	         $novost = $new;
	     }
				echo("<div class='velikinaslov'>".htmlspecialchars($novost["naslov"], ENT_QUOTES, 'UTF-8')."</div><div class='vijest'>");
				echo("<center><img src='{$novost["slika"]}' alt='Problem sa prikazivanjem slike'></center>");
				echo("<center><h3>".htmlspecialchars($novost["tekst"], ENT_QUOTES, 'UTF-8')."</h3></center></div>");
				
	if(isset($_SESSION["admin"])) {
	echo('<div class="mogucnosti"><a href="FPReviewsForma.php"><img src="dodaj.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a>  <a href="FPReviewsFormaIzmijeni.php?id='.$id.'"><img src="promijeni.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a>  <a href="obrisiRecenziju.php?id='.$id.'"><img src="obrisi.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a></div>');}
	?>
	
</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>