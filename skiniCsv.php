<?php
$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
$veza->exec("set names utf8");
if (!$veza) {
    die("Connection failed: " . mysqli_connect_error());
}
$news = $veza->query("select id, naslov, slika, tekst from news");

if (!$news) {
      $greska = $veza->errorInfo();
      print "SQL greška: " . $greska[2];
      exit();
 }
$xml = "<?xml version='1.0' encoding='UTF-8'?><novosti>";
 foreach ($news as $new) {
  $xml.="<novost><id>";
  $xml.=$new["id"];
  $xml.="</id><naslov>";
  $xml.=$new["naslov"];
  $xml.="</naslov><slika>";
  $xml.=$new["slika"];
  $xml.="</slika><tekst>";
  $xml.=$new["tekst"];
  $xml.="</tekst></novost>";
}
$xml.="</novosti>";
file_put_contents("xmls/NewsCSV.xml", $xml);

$filexml = 'xmls/NewsCSV.xml';
if (file_exists($filexml)) {
$xml = simplexml_load_file($filexml);
$f = fopen('csvs/News.csv', 'w');
foreach ($xml->novost as $novost) {
    fputcsv($f, get_object_vars($novost),',','"');
}
fclose($f);
}
header('Content-Disposition: attachment; filename="csvs/News.csv";');
readfile('csvs/News.csv'); 
?>
