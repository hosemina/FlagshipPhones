
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<?php
    $novosti = file_get_contents('xmls/Reviews.xml');
    if(strlen($novosti) != 0)
    {
        $sveNovosti = simplexml_load_file('xmls/Reviews.xml');
		$id = $_GET["id"];
		foreach ($sveNovosti as $x)
        {
			if($id == $x->id) {
				echo("<div class='velikinaslov'>".htmlspecialchars($x->naslov, ENT_QUOTES, 'UTF-8')."</div><div class='vijest'>");
				echo("<center><img src='{$x->slika}' alt='Problem sa prikazivanjem slike'></center>");
				echo("<center><h3>".htmlspecialchars($x->tekst, ENT_QUOTES, 'UTF-8')."</h3></center></div>");
				}
        
		}
	}
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