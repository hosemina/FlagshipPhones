 <?php
    $id=$_GET["id"];
    $idbrand=$_GET["idbrand"];
    /*$sve = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml'); 
    $sveukupno = simplexml_load_file('xmls/PhoneSpecs.xml'); 
    foreach($sve->spec as $specifikacija)
    {
        if($specifikacija->id == $id) {
            $dom=dom_import_simplexml($specifikacija);
            $dom->parentNode->removeChild($dom);
        }
    }
    foreach($sveukupno->spec as $specifikacija)
    {
        if($specifikacija->idbrand == $idbrand) {
        if($specifikacija->id == $id) {
            $dom=dom_import_simplexml($specifikacija);
            $dom->parentNode->removeChild($dom);
        }
    }}
    $snimi = $sve->asXML();
    $snimiukupno = $sveukupno->asXML();
    file_put_contents('xmls/PhoneSpecs'.$idbrand.'.xml', $snimi);
    file_put_contents('xmls/PhoneSpecs.xml', $snimiukupno);*/
    $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
    $veza->query("delete from phones where id =".$id);
    $fileForDelete = "uploads/slikaspecs".$_GET["id"].".jpg";
    unlink($fileForDelete);
    header("Location: FPBrands.php?id=".$idbrand);   
    ?>