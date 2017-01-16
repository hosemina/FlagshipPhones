<?php
//$veza = new PDO('mysql:dbname=flagshipphones;host=localhost;charset=utf8', 'root', '');
$veza = mysqli_connect( getenv('MYSQL_SERVICE_HOST'), "emina", "emina123", "flagshipphones");
$sverecenzije = simplexml_load_file('xmls/Reviews.xml'); 

foreach( $sverecenzije->recenzija as $recenzija)
{
	$naslov = $recenzija->naslov;
	$slika = $recenzija->slika;
	$tekst = $recenzija->tekst;
	$isti = "select * from reviews where naslov='".$naslov."'";
	$rezultat = $veza->query($isti);
	if ($rezultat->num_rows < 1)
		$veza->query("insert into reviews set naslov = '".$naslov."', tekst = '".$tekst."', slika = '".$slika."'");
}
$svenovosti = simplexml_load_file('xmls/News.xml'); 
foreach($svenovosti->novost as $novost)
{
	$naslov = $novost->naslov;
	$slika = $novost->slika;
	$tekst = $novost->tekst;
	$isti = "select * from news where naslov='".$naslov."'";
	$rezultat = $veza->query($isti);
	if ($rezultat->num_rows < 1)
		$veza->query("insert into news set naslov = '".$naslov."', tekst = '".$tekst."', slika = '".$slika."'");
}
$svibrendovi = simplexml_load_file('xmls/Brands.xml'); 
foreach($svibrendovi->brand as $brand)
{
	$naziv = $brand->naziv;
	
	$isti = "select * from brands where brand='".$naziv."'";
	$rezultat = $veza->query($isti);
	if ($rezultat->num_rows < 1)
		$veza->query("insert into brands set brand = '".$naziv."'");
}
$sviphones = simplexml_load_file('xmls/PhoneSpecs.xml'); 
foreach($sviphones->spec as $phone)
{
	$naslov = $phone->naslov;
	$idbrand = $phone->idbrand;
	$slika = $phone->slika;
	$releaseddate = $phone->releaseddate;
	$system = $phone->system;
	$memory = $phone->memory;
	$cameraveliki = $phone->cameraveliki;
	$cameramali = $phone->cameramali;
	$displayveliki = $phone->displayveliki;
	$displaymali = $phone->displaymali;
	$ramveliki = $phone->ramveliki;
	$rammali = $phone->rammali;
	$batteryveliki = $phone->batteryveliki;
	$batterymali = $phone->batterymali;

	
	$isti = "select * from phones where naslov='".$naslov."'";
	$rezultat = $veza->query($isti);
	if ($rezultat->num_rows < 1) {
		$veza->query("insert into phones set naslov = '".$naslov."', idbrand = '".$idbrand."', slika = '".$slika."', releaseddate = '".$releaseddate."', system = '".$system."', memory = '".$memory."', cameraveliki = '".$cameraveliki."', cameramali = '".$cameramali."', displayveliki = '".$displayveliki."', displaymali = '".$displaymali."', ramveliki = '".$ramveliki."', rammali = '".$rammali."', batteryveliki = '".$batteryveliki."', batterymali = '".$batterymali."'");
	}
	}

$sviusers = simplexml_load_file('xmls/Users.xml'); 
foreach($sviusers->user as $user)
{
	$username = $user->username;
	$password = $user->password;
	$passwordpassword = md5($password);
	$isti = "select * from users where username='".$username."'";
	$istipasswords = "select * from passwords where password = '".$passwordpassword."'";
	$rezultat = $veza->query($isti);
	$rezultatpass = $veza->query($istipasswords);
	if ($rezultat->num_rows < 1)
		$veza->query("insert into users set type = 2, username = '".$username."', password = '".$password."'");
	if($rezultatpass->num_rows < 1)
		$veza->query("insert into passwords set password = '".$passwordpassword."'");
}
header("Location:index.php");


?>