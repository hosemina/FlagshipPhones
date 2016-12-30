
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

 

<?php

    $brands = file_get_contents('xmls/Brands.xml');
    if(strlen($brands) != 0)
    {
	
        $allBrands = simplexml_load_file('xmls/Brands.xml');
		$id = $_GET["id"];
		foreach ($allBrands as $x)
        {
			if($id == $x->idbrand) {
			echo('<div class="velikinaslov">'.$x->naziv.'</div>');
			echo('<ul id="phonesGrid">');
			$phones = file_get_contents('xmls/PhoneSpecs'.$x->idbrand.'.xml');
			if(strlen($phones)!=0)
       		{
			$allPhones = simplexml_load_file('xmls/PhoneSpecs'.$x->idbrand.'.xml') or die("Error: Cannot create object");
			foreach ($allPhones as $y)
				{
				echo('<li>');
				echo("<div class='phone'><img src='{$y->slika}' alt='{$y->naslov}' class='phoneslika'></div>");
				echo('<div class="phonename"><a href="FPPhoneSpecs.php?idbrand='.$x->idbrand.'&id='.$y->id.'" class="phonenameLink">'.$y->naslov.'</a></div></li>');
				}
			echo("</ul>");
			}
			}
		}
}
if(isset($_SESSION["admin"])) {
	echo('<div class="mogucnosti"><a href="FPPhoneSpecsForma.php?idbrand='.$id.'"><img src="dodaj.png" class="ikoniceadmin" alt="Problem sa prikazivanjem slike"></a> </div>');}

?>


</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>