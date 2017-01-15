<?php
$filexml = 'xmls/News.xml';
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
