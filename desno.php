

<div class="desno">
<?php
echo("<div id='phonesnaslov' class='naslov'>PHONES    </div>");
echo("<ul id='telefoni'>");
    $brands = file_get_contents('xmls/Brands.xml');
    if(strlen($brands) != 0)
    {
        $allBrands = simplexml_load_file('xmls/Brands.xml');
        foreach ($allBrands as $x)
        {
			echo("<li><a href='FPBrands.php?id={$x->idbrand}'>{$x->naziv}</a></li>");
		}
	}
echo("</ul>");
?>
<div id="top10naslov" class="naslov">Top 10</div>
<ol id="top10">
	<li><a href="nesto">Samsung Galaxy S7 edge</a></li>
	<li><a href="nesto">Samsung Galaxy Note5</a></li>
	<li><a href="nesto">Sony Xperia Z5</a></li>
	<li><a href="nesto">Xiaomi Mi 5</a></li>
	<li><a href="nesto">HTC 10</a></li>
	<li><a href="nesto">Samsung Galaxy S7</a></li>
	<li><a href="nesto">Apple iPhone 7</a></li>
	<li><a href="nesto">Samsung Galaxy J7</a></li>
	<li><a href="nesto">Huawei Nexus 6P</a></li>
	<li><a href="nesto">Xiaomi Mi Mix</a></li>
</ol>
 <div id="top10naslov2" class="naslov">Top 10</div>
<ol id="top10-2">
	<li><a href="nesto">Samsung Galaxy S7 edge</a></li>
	<li><a href="nesto">Samsung Galaxy Note5</a></li>
	<li><a href="nesto">Sony Xperia Z5</a></li>
	<li><a href="nesto">Xiaomi Mi 5</a></li>
	<li><a href="nesto">HTC 10</a></li>
	<li><a href="nesto">Samsung Galaxy S7</a></li>
	<li><a href="nesto">Apple iPhone 7</a></li>
	<li><a href="nesto">Samsung Galaxy J7</a></li>
	<li><a href="nesto">Huawei Nexus 6P</a></li>
	<li><a href="nesto">Xiaomi Mi Mix</a></li>
</ol>
</div>