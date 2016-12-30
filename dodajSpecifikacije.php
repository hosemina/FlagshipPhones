
<?php
    $idbrand=$_GET["idbrand"];

if(isset($_POST['naslovtekst'],$_FILES['imagespecs'], $_POST['releaseddatetext'],$_POST['systemtext'],$_POST['memorytext'],$_POST['cameravelikitekst'],$_POST['cameramalitekst'],$_POST['displayvelikitekst'],$_POST['displaymalitekst'],$_POST['ramvelikitekst'],$_POST['rammalitekst'],$_POST['batteryvelikitekst'],$_POST['batterymalitekst'])) {
    echo("OKEJSVE");
        $sve = file_get_contents('xmls/PhoneSpecs'.$idbrand.'.xml');
        $sveukupno = file_get_contents('xmls/PhoneSpecs.xml');
        if($sve[strlen($sve)-2] == '>') $sve = substr($sve,0,strlen($sve)-1);
        if($sveukupno[strlen($sveukupno)-2] == '>') $sveukupno = substr($sveukupno,0,strlen($sveukupno)-1);
        if(strlen($sve)==0)
        {
            $sve ="<?xml version='1.0' encoding='utf-8'?><specs></specs>";
            file_put_contents('xmls/PhoneSpecs'.$idbrand.'.xml', $sve);
        }
        $brojSpecifikacija = 0;
        $ucitanixml = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml');
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
        if(isset($_POST['naslovtekst']) && isset($_POST['imagespecs']) && isset($_POST['releaseddatetext']) && isset($_POST['systemtext']) && isset($_POST['memorytext']) && isset($_POST['cameravelikitekst']) && isset($_POST['cameramalitekst']) && isset($_POST['displayvelikitekst']) && isset($_POST['displaymalitekst']) && isset($_POST['ramvelikitekst']) && isset($_POST['rammalitekst']) && isset($_POST['batteryvelikitekst']) && isset($_POST['batterymalitekst'])) {
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
            echo("OVO JE OKEJ SRVARNO");
            if (move_uploaded_file($_FILES["imagespecs"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["imagespecs"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    
        $specs = "<spec><id>".$brojSpecifikacija."</id><naslov>" .htmlspecialchars($_POST['naslovtekst']) . "</naslov><slika>".$target_file."</slika><releaseddate>" . htmlspecialchars($_POST['releaseddatetext']) . "</releaseddate><system>".htmlspecialchars($_POST['systemtext'])."</system><memory>".htmlspecialchars($_POST['memorytext'])."</memory><cameraveliki>".htmlspecialchars($_POST['cameravelikitekst'])."</cameraveliki><cameramali>".htmlspecialchars($_POST['cameramalitekst'])."</cameramali><displayveliki>".htmlspecialchars($_POST['displayvelikitekst'])."</displayveliki><displaymali>".htmlspecialchars($_POST['displaymalitekst'])."</displaymali><ramveliki>".htmlspecialchars($_POST['ramvelikitekst'])."</ramveliki><rammali>".htmlspecialchars($_POST['rammalitekst'])."</rammali><batteryveliki>".htmlspecialchars($_POST['batteryvelikitekst'])."</batteryveliki><batterymali>".htmlspecialchars($_POST['batterymalitekst'])."</batterymali></spec>";
        $sve = substr($sve,0,strlen($sve)-8).$specs."</specs>";
        $specsukupno = "<spec><idbrand>".$idbrand."</idbrand><id>".$brojSpecifikacija."</id><naslov>" .htmlspecialchars($_POST['naslovtekst']) . "</naslov><slika>".$target_file."</slika><releaseddate>" . htmlspecialchars($_POST['releaseddatetext']) . "</releaseddate><system>".htmlspecialchars($_POST['systemtext'])."</system><memory>".htmlspecialchars($_POST['memorytext'])."</memory><cameraveliki>".htmlspecialchars($_POST['cameravelikitekst'])."</cameraveliki><cameramali>".htmlspecialchars($_POST['cameramalitekst'])."</cameramali><displayveliki>".htmlspecialchars($_POST['displayvelikitekst'])."</displayveliki><displaymali>".htmlspecialchars($_POST['displaymalitekst'])."</displaymali><ramveliki>".htmlspecialchars($_POST['ramvelikitekst'])."</ramveliki><rammali>".htmlspecialchars($_POST['rammalitekst'])."</rammali><batteryveliki>".htmlspecialchars($_POST['batteryvelikitekst'])."</batteryveliki><batterymali>".htmlspecialchars($_POST['batterymalitekst'])."</batterymali></spec>";
        $sveukupno = substr($sveukupno,0,strlen($sveukupno)-8).$specsukupno."</specs>";
        file_put_contents("xmls/PhoneSpecs".$idbrand.".xml", $sve);
        file_put_contents("xmls/PhoneSpecs.xml", $sveukupno);
        echo("OKEJ OKEJ OKEJ");
        header('Location: FPPhoneSpecs.php?idbrand='.$idbrand.'&id='.$brojSpecifikacija);
    }
    
?>