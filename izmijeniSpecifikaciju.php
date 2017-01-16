<?php
 $id=$_GET["id"];
 $idbrand=$_GET["idbrand"];

if(isset($_POST['naslovtekst'], $_POST['releaseddatetext'],$_POST['systemtext'],$_POST['memorytext'],$_POST['cameravelikitekst'],$_POST['cameramalitekst'],$_POST['displayvelikitekst'],$_POST['displaymalitekst'],$_POST['ramvelikitekst'],$_POST['rammalitekst'],$_POST['batteryvelikitekst'],$_POST['batterymalitekst'])) {
    
        /*$sve = simplexml_load_file('xmls/PhoneSpecs'.$idbrand.'.xml'); 
        $sveukupno = simplexml_load_file('xmls/PhoneSpecs.xml'); 
        foreach($sve->spec as $specifikacija)
        {
            if($specifikacija->id == $id) {
                $specifikacija->naslov = htmlspecialchars($_POST['naslovtekst']);
                $specifikacija->releaseddate = htmlspecialchars($_POST['releaseddatetext']);
                $specifikacija->system = htmlspecialchars($_POST['systemtext']);
                $specifikacija->memory = htmlspecialchars($_POST['memorytext']);
                $specifikacija->cameraveliki = htmlspecialchars($_POST['cameravelikitekst']);
                $specifikacija->cameramali = htmlspecialchars($_POST['cameramalitekst']);
                $specifikacija->displayveliki = htmlspecialchars($_POST['displayvelikitekst']);
                $specifikacija->displaymali = htmlspecialchars($_POST['displaymalitekst']);
                $specifikacija->ramveliki = htmlspecialchars($_POST['ramvelikitekst']);
                $specifikacija->rammali = htmlspecialchars($_POST['rammalitekst']);
                $specifikacija->batteryveliki = htmlspecialchars($_POST['batteryvelikitekst']);
                $specifikacija->batterymali = htmlspecialchars($_POST['batterymalitekst']);
            }
        }
        foreach ($sveukupno->spec as $specifikacija) {
            if ($specifikacija->idbrand == $idbrand) {
                if($specifikacija->id == $id) {
                $specifikacija->naslov = htmlspecialchars($_POST['naslovtekst']);
                $specifikacija->releaseddate = htmlspecialchars($_POST['releaseddatetext']);
                $specifikacija->system = htmlspecialchars($_POST['systemtext']);
                $specifikacija->memory = htmlspecialchars($_POST['memorytext']);
                $specifikacija->cameraveliki = htmlspecialchars($_POST['cameravelikitekst']);
                $specifikacija->cameramali = htmlspecialchars($_POST['cameramalitekst']);
                $specifikacija->displayveliki = htmlspecialchars($_POST['displayvelikitekst']);
                $specifikacija->displaymali = htmlspecialchars($_POST['displaymalitekst']);
                $specifikacija->ramveliki = htmlspecialchars($_POST['ramvelikitekst']);
                $specifikacija->rammali = htmlspecialchars($_POST['rammalitekst']);
                $specifikacija->batteryveliki = htmlspecialchars($_POST['batteryvelikitekst']);
                $specifikacija->batterymali = htmlspecialchars($_POST['batterymalitekst']);
            }
            }
        }
        $snimi = $sve->asXML();
        $snimiukupno = $sveukupno->asXML();
        file_put_contents('xmls/PhoneSpecs'.$idbrand.'.xml', $snimi);
        file_put_contents("xmls/PhoneSpecs.xml", $snimiukupno);*/
        $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $veza->query("update phones set naslov = '".htmlspecialchars($_POST['naslovtekst']) ."', releaseddate = '". htmlspecialchars($_POST['releaseddatetext']) ."', system = '".htmlspecialchars($_POST['systemtext'])."', memory = '".htmlspecialchars($_POST['memorytext'])."', cameraveliki = '".htmlspecialchars($_POST['cameravelikitekst'])."', cameramali = '".htmlspecialchars($_POST['cameramalitekst'])."', displayveliki = '".htmlspecialchars($_POST['displayvelikitekst'])."', displaymali = '".htmlspecialchars($_POST['displaymalitekst'])."', ramveliki = '".htmlspecialchars($_POST['ramvelikitekst'])."', rammali = '".htmlspecialchars($_POST['rammalitekst'])."', batteryveliki = '".htmlspecialchars($_POST['batteryvelikitekst'])."', batterymali = '".htmlspecialchars($_POST['batterymalitekst'])."' where id=".$id);

        header('Location: FPPhoneSpecs.php?idbrand='.$idbrand.'&id='.$id);
    }
    header('Location: index.php');
?>