 <?php
    $id=$_GET["id"];
    $idbrand=$_GET["idbrand"];
    $sve = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml'); 
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
    file_put_contents('xmls/PhoneSpecs.xml', $snimiukupno);
    header("Location: FPBrands.php?id=".$idbrand);   
    ?>