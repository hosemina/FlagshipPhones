
<?php
include 'header.php';
?>
<div class="container2"><article><div id ="SadrzajStranice">

<div class="specs-velikinaslov">Samsung Galaxy S7 Edge</div>
<div class="specs">
<img src="slikas7.jpg" class="slikaspecs" alt="Samsung Galaxy S7 Edge">
<div class="redspecs">
	<ul>
		<li id="releasedDate" class="listaspecs">Released 2016, March</li>
		<li id="system" class ="listaspecs">Android OS, v6.0</li>
		<li id="memory" class ="listaspecs">32/64GB storage, microSD card slot</li>
	</ul>
</div>
<div id ="camera" class ="kolonaspecs">
	<img src="camera.png" class="malaslicica" alt="Camera">
	<div class="tekst-kolonaspecs">12MP</div>
	<div class="malitekst-kolonaspecs">2160p</div>
</div>
<div id ="display" class ="kolonaspecs">
	<img src="size.png" class="malaslicica" alt="Display">
	<div class="tekst-kolonaspecs">5.5"</div>
	<div class="malitekst-kolonaspecs">1440x2560 pixels</div>
</div>
<div id ="ram" class ="kolonaspecs">
	<img src="ram.png" class="malaslicica" alt="RAM">
	<div class="tekst-kolonaspecs">4GB RAM</div>
	<div class="malitekst-kolonaspecs">Snapdragon 820</div>
</div>
<div id ="battery" class ="kolonaspecs">
	<img src="battery.png" class="malaslicica" alt="Battery">
	<div class="tekst-kolonaspecs">3600mAh</div>
	<div class="malitekst-kolonaspecs">Li-Ion</div>
</div>
<div class="gallery">
<div class="velikinaslov">Slike - click to zoom</div>
<img class="galleryImg" id="Img1" src="s7edgeblack.jpg" alt="Samsung Galaxy S7 Edge black" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img2" src="s7edgepink.jpg" alt="Samsung Galaxy S7 Edge pink" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img3" src="s7edgewhite.jpg" alt="Samsung Galaxy S7 Edge white" onclick = "zoomphoto(this)">
<img class="galleryImg" id="Img4" src="s7edgestr.jpg" alt="Samsung Galaxy S7 Edge silver and gold" onclick = "zoomphoto(this)">
</div>
<div id="ModalGallery" class="modal">
  <span onclick="closeModal()" class="close">×</span>
  <img class="modal-content-gallery" id="imgmodal">
  <div id="caption"></div>
</div>
</div>
<div class="fullspecs">
<div class="velikinaslov"><b>Design</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Device type: </td>
		<td class="kolona2-specs"><input type="text" name="device" id="device"></td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">OS: </td>
		<td class="kolona2-specs">Androclass, v6.0</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Dimensions: </td>
		<td class="kolona2-specs">5.94 x 2.86 x 0.30 inches (150.9 x 72.6 x 7.7 mm)</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Weight: </td>
		<td class="kolona2-specs">157 g</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Materials: </td>
		<td class="kolona2-specs">Main body: glass; Accents: aluminium</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Features: </td>
		<td class="kolona2-specs">Fingerprint (touch)</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Rugged: </td>
		<td class="kolona2-specs">Water, Dust resistant (IP 68)</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Colors: </td>
		<td class="kolona2-specs">Black, Gold, Silver, Pink, White</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Display</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Physical size: </td>
		<td class="kolona2-specs">5.5 inches</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Resolution: </td>
		<td class="kolona2-specs">1440 x 2560 pixels</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Pixel density: </td>
		<td class="kolona2-specs">534 ppi</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Technology: </td>
		<td class="kolona2-specs">Super AMOLED</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Screen-to-body ratio: </td>
		<td class="kolona2-specs">76.09%</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Features: </td>
		<td class="kolona2-specs">Scratch-resistant glass (Corning Gorilla Glass 4), Light sensor, Proximity sensor</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Camera</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Camera: </td>
		<td class="kolona2-specs">Flash: LED <br>Aperture size: F1.7<br>Focal length: 26 mm<br>Camera sensor size: 1/2.5"<br>Pixel size: 1.4 microm<br>Hardware Features: Optical image stabilization, Autofocus(Phase detection)<br>Software Features: Raw image capture, Touch to focus, Smile detection, Face detection, Self-timer, Geo tagging<br>Settings: Exposure compensation, ISO control, White balance presets<br>Shooting Modes: Brust mode, Hight Dynamic Range mode(HDR), Panorama, Scenes, Effects</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Camcorder: </td>
		<td class="kolona2-specs">3840x2160(4K)(30fps), 1920x1080(1080 HD)(60fps), 1280x720(720 HD)(240fps)<br> Features: High Dynamic Range Mode (HDR), Picture-taking during video recording, Video calling, Video sharing</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Front-facing camera: </td>
		<td class="kolona2-specs">5 megapixels<br>Features: High Dynamic Range mode(HDR)</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Hardware</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">System chip: </td>
		<td class="kolona2-specs">Samsung Exynos 8 Octa 8890</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Processor: </td>
		<td class="kolona2-specs">Octa-core, 2300 MHz, Exynos M1 and ARM Cortex-A53, 64bit</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Graphics processor: </td>
		<td class="kolona2-specs">ARM Mali-T880 MP12</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">System memory: </td>
		<td class="kolona2-specs">4 GB RAM</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Built-in storage: </td>
		<td class="kolona2-specs">32 GB</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Maximum User Storage: </td>
		<td class="kolona2-specs">24.4 GB</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Storage expansion: </td>
		<td class="kolona2-specs">microSD, microSDHC, microSDXC up to 200 GB</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Battery</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Capacity: </td>
		<td class="kolona2-specs">3600mAh</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Type: </td>
		<td class="kolona2-specs">Not user replaceable, Li-Ion</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Wireless charging: </td>
		<td class="kolona2-specs">Optional</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Talk time(3G): </td>
		<td class="kolona2-specs">27.00 hours</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Internet use: </td>
		<td class="kolona2-specs">3G: 12 hours<br>LTE: 15 hours<br>Wi-Fi: 16 hours</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Music playback: </td>
		<td class="kolona2-specs">55.00 hours</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Vclasseo playback: </td>
		<td class="kolona2-specs">18.00 hours</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Multimedia</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Music player: </td>
		<td class="kolona2-specs">Filter by: Album, Artist, Genre, Playlists<br>Features: Album art cover, Background playback</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Speakers: </td>
		<td class="kolona2-specs">Earpiece, Loudspeaker</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Cellular</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">GSM: </td>
		<td class="kolona2-specs">850, 900, 1800, 1900 MHz</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">UMTS: </td>
		<td class="kolona2-specs">850, 900, 1700/2100, 1900, 2100 MHz</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">LTE(FDD): </td>
		<td class="kolona2-specs">Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">LTE(TDD): </td>
		<td class="kolona2-specs">Bands 38, 39, 40, 41</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Data: </td>
		<td class="kolona2-specs">LTE-A Cat 9 (450/50 Mbit/s), HSPA</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Nano SIM: </td>
		<td class="kolona2-specs">Yes</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">HD Voice: </td>
		<td class="kolona2-specs">Yes</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">VoLTE: </td>
		<td class="kolona2-specs">Yes</td>
	</tr>
</table>
<br>
<div class="velikinaslov"  ><b>Phone Features</b></div>
<table class="table-specs">
	<tr class="red-specs">
		<td class="kolona1-specs">Sensors: </td>
		<td class="kolona2-specs">Accelerometer, Gyroscope, Compass, Hall, Barometer</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Notifications: </td>
		<td class="kolona2-specs">Haptic feedback, Music ringtones (MP3), Polyphonic ringtones, Vibration, Flight mode, Silent mode, Speakerphone</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Hearing aclass compatibility: </td>
		<td class="kolona2-specs">M4, T3</td>
	</tr>
	<tr class="red-specs">
		<td class="kolona1-specs">Other features: </td>
		<td class="kolona2-specs">Voice dialing, Voice commands, Voice recording, TTY/TDD</td>
	</tr>
</table>
<br>
</div>
<div class = "komentar"><form class="komentar">
	Email: <input type = 'text' name='email' id = 'email'/><br>
	Comment: <br>
	<textarea name='comment' id ='comment'></textarea><br>
	<input type='hidden' name='articleid' id='articleid' />
  <input type='submit' value='Submit' />  </form>
</div>


</div></article>
<?php
include 'desno.php';
?>
</div>


<?php
include 'footer.php';
?>