
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

 
<div class="velikinaslov">All mobile phone brands</div>
<?php

echo("<ul id='telefoniSvi'>");
    /*$brands = file_get_contents('xmls/Brands.xml');
	
    if(strlen($brands) != 0)
    {
        $allBrands = simplexml_load_file('xmls/Brands.xml') or die("Error: Cannot create object");
		*/
        $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $brands = $veza->query("select id, brand from brands");
        if (!$brands) {
              $greska = $veza->errorInfo();
              print "SQL greška: " . $greska[2];
              exit();
         }
        foreach ($brands as $brand)
        {
			echo("<li><a href='FPBrands.php?id={$brand["id"]}'>{$brand["brand"]}</a></li>");
		}

echo("</ul>");
?>


</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>