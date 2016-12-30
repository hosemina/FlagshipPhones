
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<form enctype="multipart/form-data" method="post" action="dodajNovost.php" name="changer">
				<div class='velikinaslov'><input type='text' name='naslovvijesti' id='naslovvijesti' placeholder="Naslov vijesti"></div><div class='vijest'>
				<center><input name="imagespecs" accept="image/jpeg" type="file" id ="imagespecs"></center>
				<center><textarea name='vijesttext' id='vijesttext' placeholder="Tekst vijesti..."></textarea></center></div>
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