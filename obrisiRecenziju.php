 <?php
    $id=$_GET["id"];
/*
    $sve = simplexml_load_file('xmls/Reviews.xml'); 
    foreach($sve->recenzija as $novost)
    {
        if($novost->id == $id) {
            $dom=dom_import_simplexml($novost);
            $dom->parentNode->removeChild($dom);
        }
    }
    $snimi = $sve->asXML();
    
    file_put_contents('xmls/Reviews.xml', $snimi);*/
    $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
    $veza->query("delete from reviews where id =".$id);
    $fileForDelete = "uploads/slikarecenzija".$_GET["id"].".jpg";
    unlink($fileForDelete);
    header("Location: FPReviews.php");   
    ?>