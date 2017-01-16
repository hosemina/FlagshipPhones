
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

<?php
    $id=$_GET["id"];
    
    /*$sve = simplexml_load_file('xmls/News.xml'); 
    foreach($sve->novost as $novost)
    {
        if($novost->id == $id) {
            $specVrijednosti = $novost;
        }
    }*/
    $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
    $veza->exec("set names utf8");
    if (!$veza) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sve = $veza->query("select naslov, tekst from news where id=".$id);
    if (!$sve) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     foreach ($sve as $novost) {
         $novostizmijeni = $novost;
     }

echo('<form enctype="multipart/form-data" method="post" action="izmijeniVijest.php?id='.$id.'" name="changer">');
?>
	<div class='velikinaslov'><input type='text' name='naslovvijesti' id='naslovvijesti' placeholder="Naslov vijesti" value="<?php echo($novostizmijeni['naslov']);?>"></div><div class='vijest'>
	
	<center><textarea name='vijesttext' id='vijesttext' placeholder="Tekst vijesti..." ><?php echo($novostizmijeni["tekst"]);?></textarea></center></div>
	<input value="Submit" type="submit">
</form>
	
</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>