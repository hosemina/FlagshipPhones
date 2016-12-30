
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

<?php
    $id=$_GET["id"];
    
    $sve = simplexml_load_file('xmls/News.xml'); 
    foreach($sve->novost as $novost)
    {
        if($novost->id == $id) {
            $specVrijednosti = $novost;
        }
    }
echo('<form enctype="multipart/form-data" method="post" action="izmijeniVijest.php?id='.$id.'" name="changer">');
?>
	<div class='velikinaslov'><input type='text' name='naslovvijesti' id='naslovvijesti' placeholder="Naslov vijesti" value="<?php echo($specVrijednosti->naslov);?>"></div><div class='vijest'>
	
	<center><textarea name='vijesttext' id='vijesttext' placeholder="Tekst vijesti..." ><?php echo($specVrijednosti->tekst);?></textarea></center></div>
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