 <?php
    $id=$_GET["id"];

    $sve = simplexml_load_file('xmls/Reviews.xml'); 
    foreach($sve->recenzija as $novost)
    {
        if($novost->id == $id) {
            $dom=dom_import_simplexml($novost);
            $dom->parentNode->removeChild($dom);
        }
    }
    $snimi = $sve->asXML();
    
    file_put_contents('xmls/Reviews.xml', $snimi);
    header("Location: FPReviews.php");   
    ?>