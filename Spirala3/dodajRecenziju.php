<?php


if(isset($_POST['naslovvijesti'],$_FILES['imagespecs'], $_POST['vijesttext'])) {
    echo("OKEJSVE");
        $sve = file_get_contents('xmls/Reviews.xml');
        if($sve[strlen($sve)-2] == '>') $sve = substr($sve,0,strlen($sve)-1);
       
        if(strlen($sve)==0)
        {
            $sve ="<?xml version='1.0' encoding='utf-8'?><recenzije></recenzije>";
            file_put_contents('xmls/Reviews.xml', $sve);
        }
        $brojSpecifikacija = 0;
        $ucitanixml = simplexml_load_file('xmls/Reviews.xml');
        foreach($ucitanixml as $x)
        {
            $brojSpecifikacija = $x->id+1;
        }
        echo($brojSpecifikacija);
    
        /*img upload*/
    
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["imagespecs"]["name"]);
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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
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
    
        $specs = "<recenzija><id>".$brojSpecifikacija."</id><naslov>" .htmlspecialchars($_POST['naslovvijesti']) . "</naslov><slika>".$target_file."</slika><tekst>".htmlspecialchars($_POST['vijesttext']) ."</tekst></recenzija>";
        $sve = substr($sve,0,strlen($sve)-12).$specs."</recenzije>";
        
        file_put_contents("xmls/Reviews.xml", $sve);
        
        header('Location: FPReview.php?id='.$brojSpecifikacija);
    }
    
?>