<?php
$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
$veza->exec("set names utf8");
if (!$veza) {
    die("Connection failed: " . mysqli_connect_error());
}
$specs = $veza->query("select id, idbrand, naslov, slika, releaseddate, system, memory, cameraveliki, cameramali, displayveliki, displaymali, ramveliki, rammali, batteryveliki, batterymali from phones");

if (!$specs) {
      $greska = $veza->errorInfo();
      print "SQL greška: " . $greska[2];
      exit();
 }
 $xml = "<?xml version='1.0' encoding='UTF-8'?><specs>";
 foreach ($specs as $spec) {
  $xml.="<spec><id>";
  $xml.=$spec["id"];
  $xml.="</id><idbrand>";
  $xml.=$spec["idbrand"];
  $xml.="</idbrand><naslov>";
  $xml.=$spec["naslov"];
  $xml.="</naslov><releaseddate>";
  $xml.=$spec["releaseddate"];
  $xml.="</releaseddate><system>";
  $xml.=$spec["system"];
  $xml.="</system><memory>";
  $xml.=$spec["memory"];
  $xml.="</memory><cameraveliki>";
  $xml.=$spec["cameraveliki"];
  $xml.="</cameraveliki><cameramali>";
  $xml.=$spec["cameramali"];
  $xml.="</cameramali><displayveliki>";
  $xml.=$spec["displayveliki"];
  $xml.="</displayveliki><displaymali>";
  $xml.=$spec["displaymali"];
  $xml.="</displaymali><ramveliki>";
  $xml.=$spec["ramveliki"];
  $xml.="</ramveliki><rammali>";
  $xml.=$spec["rammali"];
  $xml.="</rammali><batteryveliki>";
  $xml.=$spec["batteryveliki"];
  $xml.="</batteryveliki><batterymali>";
  $xml.=$spec["batterymali"];
  $xml.="</batterymali></spec>";
}
$xml.="</specs>";
file_put_contents("xmls/PhoneSearch.xml", $xml);
$xmlDoc=new DOMDocument();
$xmlDoc->load("xmls/PhoneSearch.xml");
$x=$xmlDoc->getElementsByTagName('spec');
//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {  
    $y=$x->item($i)->getElementsByTagName('naslov');
    $link = $x->item($i)->getElementsByTagName('id');
    $link2 = $x->item($i)->getElementsByTagName('idbrand');
	
    if ($y->item(0)->nodeType==1 ) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='FPCompare.php?idbrand=" . 
          $link2->item(0)->childNodes->item(0)->nodeValue . 
          "&id=" .
          $link->item(0)->childNodes->item(0)->nodeValue . 
          "')'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";

        } else {
          $hint=$hint . "<br /><a href='FPCompare.php?idbrand=" . 
          $link2->item(0)->childNodes->item(0)->nodeValue . 
          "&id=" .
          $link->item(0)->childNodes->item(0)->nodeValue . 
          "')'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
	  
      }
    }
  }
}
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="Nema slicnih rezultata.";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>