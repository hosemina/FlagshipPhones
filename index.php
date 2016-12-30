
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

<div class="velikinaslov">Latest specs</div>
<?php
    $recenzije = file_get_contents('xmls/PhoneSpecs.xml');
    if(strlen($recenzije) != 0)
    {
        $sveRecenzije = simplexml_load_file('xmls/PhoneSpecs.xml');
		$i = 0;
		foreach ($sveRecenzije as $x)
        {
			echo("<a href='FPPhoneSpecs.php?idbrand=".$x->idbrand."&id=".$x->id."'><div class='topvijest'>");
			echo("<img src='{$x->slika}' alt='{$x->naslov}'>");
			echo("<div class='naslovtopvijest'><span>{$x->naslov}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
		}
	}
?>
<div class="velikinaslov">Latest reviews</div>
<?php
    $recenzije = file_get_contents('xmls/Reviews.xml');
    if(strlen($recenzije) != 0)
    {
        $sveRecenzije = simplexml_load_file('xmls/Reviews.xml');
		$i = 0;
		foreach ($sveRecenzije as $x)
        {
			echo("<a href='FPReview.php?id={$x->id}'><div class='topvijest'>");
			
			echo("<img src='{$x->slika}' alt='{$x->naslov}'>");
			echo("<div class='naslovtopvijest'><span>{$x->naslov}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
		}
	}
?>
<div class="velikinaslov">News</div>
<?php
    $novosti = file_get_contents('xmls/News.xml');
    if(strlen($novosti) != 0)
    {
        $sveNovosti = simplexml_load_file('xmls/News.xml');
		$i = 0;
		foreach ($sveNovosti as $x)
        {
			echo("<a href='FPNew.php?id={$x->id}'><div class='vijest'>");
			$tekst = substr($x->tekst, 0, 400);
			$tekst = $tekst."...";
			echo("<img src='{$x->slika}' alt='Problem sa prikazivanjem slike' class='slikareview'><div class='sadrzajvijesti'>".$tekst."</div>");
			echo("<div class='vijestnaslov'><span>{$x->naslov}</span></div>");
			echo('</div></a>');
			$i++;
			if ($i == 3) 
				break;
		}
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