
var modal = document.getElementById('loginForm');
var modal1 = document.getElementById('registrationForm');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal1) {
		modal1.style.display = "none";
	}
}

