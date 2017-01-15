
<?php
include 'header.php';
?>


<div class="container2"><article><div id ="SadrzajStranice">
<div class="mogucnosti">
<form enctype="multipart/form-data" method="get" action="JSON.php" name="changer">
				<input type='text' name='idbrand' id='idbrandid' placeholder="ID proizvodjaca telefona">
				<input value="Submit" type="image" src="json.png"  alt="Problem sa prikazivanjem slike" width="60" height="60"> Vrati sve nazive telefona koji su od proizvođača čiji id unesete.
</form></div>
<div class="mogucnosti"><a href="prebaciUBazu.php"><img src="xmlmysql.png"  alt="Problem sa prikazivanjem slike" width="60" height="60"></a> Prebacivanje XML sadržaja u bazu.</div>

</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>