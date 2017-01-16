<?php
 $id=$_GET["id"];
if(isset($_POST['naslovvijesti'], $_POST['vijesttext'])) {
    
        /*$sve = simplexml_load_file('xmls/News.xml'); 
       
        foreach($sve->novost as $novost)
        {
            if($novost->id == $id) {
                $novost->naslov = htmlspecialchars($_POST['naslovvijesti']);
                $novost->tekst = htmlspecialchars($_POST['vijesttext']);
            }
        }
        $snimi = $sve->asXML();
        file_put_contents('xmls/News.xml', $snimi);*/
        $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $veza->query("update news set naslov = '".htmlspecialchars($_POST['naslovvijesti'] )."', tekst = '".htmlspecialchars($_POST['vijesttext'])."' where id =".$id);
        header('Location: FPNew.php?id='.$id);
    }
?>