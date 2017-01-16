<?php
$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
$veza->exec("set names utf8");
if (!$veza) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['naslovvijesti'],$_FILES['imagespecs'], $_POST['vijesttext'])) {
        /*$sve = file_get_contents('xmls/News.xml');
        if($sve[strlen($sve)-2] == '>') $sve = substr($sve,0,strlen($sve)-1);
       
        if(strlen($sve)==0)
        {
            $sve ="<?xml version='1.0' encoding='utf-8'?><novosti></novosti>";
            file_put_contents('xmls/News.xml', $sve);
        }
        $brojSpecifikacija = 0;
        $ucitanixml = simplexml_load_file('xmls/News.xml');
        foreach($ucitanixml as $x)
        {
            $brojSpecifikacija = $x->id+1;
        }
        echo($brojSpecifikacija);*/
        $sve = $veza->query("select id from news order by id desc limit 1");
         foreach($sve as $nesto)
         {
                $brojSpecifikacija = $nesto["id"];
         }
         $brojSpecifikacija += 1;
        /*img upload*/
    
        $target_dir = "uploads/";
        $ime_slike = "slikanovost".$brojSpecifikacija.".jpg";
        $target_file = $target_dir . $ime_slike;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST['naslovvijesti']) && isset($_FILES['imagespecs']) && isset($_POST['vijesttext'])) {
            $check = getimagesize($_FILES["imagespecs"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    
    
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    
        // Check file size
        if ($_FILES["imagespecs"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if(is_uploaded_file($_FILES['imagespecs']['tmp_name']))
            if (move_uploaded_file($_FILES["imagespecs"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["imagespecs"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    /*
        $specs = "novost><id>".htmlspecialchars($brojSpecifikacija)."</id><naslov>" .htmlspecialchars($_POST['naslovvijesti'] ). "</naslov><slika>".$target_file."</slika><tekst>".htmlspecialchars($_POST['vijesttext'])."</tekst></novost>";
        $sve = substr($sve,0,strlen($sve)-9).$specs."</novosti>";
        
        file_put_contents("xmls/News.xml", $sve);*/
    $isti = "select * from news where naslov='".htmlspecialchars($_POST['naslovvijesti'] )."'";
    $rezultat = $veza->query($isti);
    if ($rezultat->num_rows < 1)
        $veza->query("insert into news set naslov = '".htmlspecialchars($_POST['naslovvijesti'] )."', tekst = '".htmlspecialchars($_POST['vijesttext'])."', slika = '".$target_file."'");

        
        header('Location: FPNew.php?id='.$brojSpecifikacija);
    }
    
?>