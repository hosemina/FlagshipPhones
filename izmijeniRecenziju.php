<?php
 $id=$_GET["id"];
if(isset($_POST['naslovvijesti'], $_POST['vijesttext'])) {
    
        $sve = simplexml_load_file('xmls/Reviews.xml'); 
       
        foreach($sve->recenzija as $novost)
        {
            if($novost->id == $id) {
                $novost->naslov = htmlspecialchars($_POST['naslovvijesti']);
                $novost->tekst = htmlspecialchars($_POST['vijesttext']);
            }
        }
        $snimi = $sve->asXML();
        file_put_contents('xmls/Reviews.xml', $snimi);
        header('Location: FPReview.php?id='.$id);
    }
?>