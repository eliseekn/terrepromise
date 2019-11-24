function toggle_menu() {
	var x = document.getElementById("mobile_menu");
	if (x.classList) {
		x.classList.toggle("w3-show");
	} else {
		// Fallback for IE9 and earlier
		if (x.className.indexOf("w3-show") === -1) {
			x.className += " w3-show";
		}
		x.className = x.className.replace(" w3-show", "");
	}
}

function top_function() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var slide_index = 1,
	slide_index_auto = 0,
	showcase_index = 0;

function slide(i) {
	var x = document.getElementsByClassName("slide");

	if (i > x.length) {
		slide_index = 1;
	}

	if (i < 1) {
		slide_index = x.length;
	}

	for (var j = 0; j < x.length; j++) {
		x[j].style.display = "none";
	}

	x[slide_index - 1].style.display = "block";
}

function slide_show(i) {
	slide(slide_index += i);
}

function showcase() {
	var i;
	var x = document.getElementsByClassName("showcase_slide");

	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}

	showcase_index++;

	if (showcase_index > x.length) {
		showcase_index = 1;
	}

	x[showcase_index - 1].style.display = "block";
	setTimeout(showcase, 15000);
}

function auto_slide_show() {
	var i;
	var x = document.getElementsByClassName("slide");

	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}

	slide_index_auto++;

	if (slide_index_auto > x.length) {
		slide_index_auto = 1;
	}

	x[slide_index_auto - 1].style.display = "block";
	setTimeout(auto_slide_show, 10000);
}

function show_panel(id) {
	var x = document.getElementById(id);

	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}
