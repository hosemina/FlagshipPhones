 <?php
    $id=$_GET["id"];

    $sve = simplexml_load_file('xmls/News.xml'); 
    foreach($sve->novost as $novost)
    {
        if($novost->id == $id) {
            $dom=dom_import_simplexml($novost);
            $dom->parentNode->removeChild($dom);
        }
    }
    $snimi = $sve->asXML();
    
    file_put_contents('xmls/News.xml', $snimi);
    header("Location: FPNews.php");   
    ?>