
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<?php
    $recenzije = file_get_contents('xmls/Reviews.xml');
    if(strlen($recenzije) != 0)
    {
        $sveRecenzije = simplexml_load_file('xmls/Reviews.xml');
        echo("<div class='velikinaslov'>Reviews</div>");
        foreach ($sveRecenzije as $x)
        {
			echo("<a href='FPReview.php?id={$x->id}'><div class='vijest'>");
			$tekst = substr($x->tekst, 0, 400);
			$tekst = $tekst."...";
			echo("<img src='{$x->slika}' alt='Problem sa prikazivanjem slike' class='slikareview'><div class='sadrzajvijesti'>".htmlspecialchars($tekst, ENT_QUOTES, 'UTF-8')."</div>");
			echo("<div class='vijestnaslov'><span>".htmlspecialchars($x->naslov, ENT_QUOTES, 'UTF-8')."</span></div>");
			echo('</div></a>');
		}
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