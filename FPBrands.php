
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

 

<?php

   /* $brands = file_get_contents('xmls/Brands.xml');
    if(strlen($brands) != 0)
    {
	
        $allBrands = simplexml_load_file('xmls/Brands.xml');*/
		$id = $_GET["id"];
		/*foreach ($allBrands as $x)
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
}*/
	$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
    $veza->exec("set names utf8");
    
    $brands = $veza->query("select brand from brands where id = ".$id);
    if (!$brands) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     foreach ($brands as $brand) {
         $brandname = $brand;
     }
     echo('<div class="velikinaslov">'.$brandname["brand"].'</div>');
			echo('<ul id="phonesGrid">');
     $sve = $veza->query("select id, naslov, slika from phones where idbrand=".$id);
    if (!$sve) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     foreach ($sve as $phone) {
         echo('<li>');
				echo("<div class='phone'><img src='{$phone["slika"]}' alt='{$phone["naslov"]}' class='phoneslika'></div>");
				echo('<div class="phonename"><a href="FPPhoneSpecs.php?idbrand='.$id.'&id='.$phone["id"].'" class="phonenameLink">'.$phone["naslov"].'</a></div></li>');
				}
			echo("</ul>");
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