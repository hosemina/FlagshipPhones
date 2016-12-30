
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">


<div id="searchd">
  <form id="search" >
	<input name="q" type="text" id="trazi" size="40" placeholder="Search..." onkeyup="showResult(this.value)"><input type="button" class="dugmesearch" value="Prikazi sve rezultate pretrage" onclick="showAllResults();">
	<div id="livesearch" class="modalmali"></div>
  </form>
  </div>
	<div class="velikinaslov" id="pretraganaslov">Rezultati pretrage</div>
	<br>
	<br>
	<div id="mjestozapretragu"></div>
	
	<div class="gallery">
<div class="velikinaslov">Slike - click to zoom</div>
<img class="galleryImg" id="Img1" src="uploads/galerija1.jpg" alt="Samsung Galaxy S7 Edge black" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img2" src="uploads/galerija2.jpg" alt="Samsung Galaxy S7 Edge pink" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img3" src="uploads/galerija3.jpg" alt="Samsung Galaxy S7 Edge white" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img4" src="uploads/galerija4.jpg" alt="Samsung Galaxy S7 Edge silver and gold" onclick = "zoomphoto(this)">
</div>
<div id="ModalGallery" class="modal">
  <span onclick="closeModal()" class="close">×</span>
  <img class="modal-content-gallery" id="imgmodal">
  <div id="caption"></div>
</div>
</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>