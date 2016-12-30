
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

 
<div class="velikinaslov">All mobile phone brands</div>
<?php

echo("<ul id='telefoniSvi'>");
    $brands = file_get_contents('xmls/Brands.xml');
	
    if(strlen($brands) != 0)
    {
        $allBrands = simplexml_load_file('xmls/Brands.xml') or die("Error: Cannot create object");
		
        foreach ($allBrands as $x)
        {
			echo("<li><a href='FPBrands.php?id={$x->idbrand}'>{$x->naziv}</a></li>");
		}
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