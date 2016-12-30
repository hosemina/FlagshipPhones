<?php
 $id=$_GET["id"];
if(isset($_POST['naslovvijesti'], $_POST['vijesttext'])) {
    
        $sve = simplexml_load_file('xmls/News.xml'); 
       
        foreach($sve->novost as $novost)
        {
            if($novost->id == $id) {
                $novost->naslov = htmlspecialchars($_POST['naslovvijesti']);
                $novost->tekst = htmlspecialchars($_POST['vijesttext']);
            }
        }
        $snimi = $sve->asXML();
        file_put_contents('xmls/News.xml', $snimi);
        header('Location: FPNew.php?id='.$id);
    }
?>