var script = document.createElement('script');
script.src = 'script.js';
script.onload = function()
{};
document.head.appendChild(script);

	function promijeni(naziv){
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("SadrzajStranice").innerHTML = ajax.responseText;
			}
			if (ajax.readyState == 4 && ajax.status == 404) {
				document.getElementById("SadrzajStranice").innerHTML = "Greska: nepoznat URL";    					
			}
		}
     ajax.open("GET",  naziv, true);
     ajax.send();
     return false;
    }
	function zoomphoto(photo) {
		var modal = document.getElementById('ModalGallery');
		//var img = document.getElementById(photo);
		var modalImg = document.getElementById('imgmodal');
		var captionText = document.getElementById('caption');
		modal.style.display = "block";
		modalImg.src = photo.src;
		captionText.innerHTML = photo.alt;
	}
	window.onkeyup = function (event) {
    if (event.keyCode == 27) {  // kod za esc dugme
        document.getElementById("ModalGallery").style.display = "none";
		document.getElementById("imgmodal").src = "";
    }
}

	function closeModal() {
		document.getElementById("ModalGallery").style.display = "none";
		document.getElementById("imgmodal").src = "";
	}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('#dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function validateFormLogin() {
    var x,y, greska1, greska2;
	
	x = document.getElementById('username1');
	y = document.getElementById('password1');
	if(x.value == "" && y.value == "") {
		greska1 = "*Niste unijeli username.";
		greska2 = "*Niste unijeli password.";
		document.getElementById('greska1').innerHTML = greska1;
		document.getElementById('greska2').innerHTML = greska2;
		return false;
    }
	else if (x.value == "")
	{
		greska1 = "*Niste unijeli username.";
		document.getElementById('greska1').innerHTML = greska1;
		return false;
	}
	else if (y.value == "")
	{
		greska2 = "*Niste unijeli username.";
		document.getElementById('greska2').innerHTML = greska2;
		return false;
	}
	else {
		greska1 = "";
		greska2 = "";
		document.getElementById('greska1').innerHTML = greska1;
		document.getElementById('greska2').innerHTML = greska2;
		return true;
	}
	return false;
}
function validacijaImenaIPrezimena(unos) {
	var regex = /^[a-zA-Z]+$/;
	if(unos.value.match(regex))
		return true;
	else
		return false;
}
function validacijaUsername(unos) {
	var regex = /(?=^.{3,20}$)^[a-zA-Z][a-zA-Z0-9]*[._-]?[a-zA-Z0-9]+$/;
	if(unos.value.match(regex)) {
	return true;}
	else
		return false;
}
function validacijaEmail(unos) {
	var regex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if(unos.value.match(regex)) {
		return true;
	}
	else {
		return false;
	}
}
function validacijaPassworda(unos) {
	var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
	if(unos.value.match(regex))
		return true;
	else
		return false;
}
function validateFormRegistration() {
	var x,y, greska;
	var vrati = 1;
	x = document.getElementById("username2");
	if(validacijaUsername(x)) {
		greska = "";
		document.getElementById('greska3').innerHTML = greska;
	}
	else {
		greska = "Username mora sadržavati od 3 do 20 karaktera, ne smije počinjati brojem ili specijalnim znakom, ne smije završavati specijalnim znakom. Dozvoljeni specijalni znakovi su .-_";
		document.getElementById('greska3').innerHTML = greska;
		vrati = 0;
	}
	x = document.getElementById("email1");
	if(validacijaEmail(x)) {
		greska = "";
		document.getElementById('greska4').innerHTML = greska;
	}
	else {
		greska = "Neispravan format e-mail adrese.";
		document.getElementById('greska4').innerHTML = greska;
		vrati = 0;
	}
	x = document.getElementById("password2");
	if(validacijaPassworda(x)) {
		greska = "";
		document.getElementById('greska5').innerHTML = greska;
	}
	else {
		greska = "Password mora sadržavati minimalno 8 karaktera - barem jedno veliko slovo, jedno malo slovo i jedan broj.";
		document.getElementById('greska5').innerHTML = greska;
		vrati = 0;
	}
	x = document.getElementById("password2");
	y = document.getElementById("password3");
	if (x.value == y.value) {
		greska = "";
		document.getElementById('greska6').innerHTML = greska;
	}
	else {
		greska = "Passwordi moraju biti isti.";
		document.getElementById('greska6').innerHTML = greska;
		vrati = 0;
	}
	if (vrati == 0) {
		return false;
	}
	else {
		greska = "";
		return true;
	}
}
