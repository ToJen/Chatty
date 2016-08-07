// file: bg-slider.js - changes background image at intervals

// array for storing paths of background images
var backgroundImages = new Array();
backgroundImages[0] = "img/unsplash-1.jpg";
backgroundImages[1] = "img/unsplash-2.jpg";
backgroundImages[2] = "img/unsplash-3.jpg";
backgroundImages[3] = "img/unsplash-4.jpg";
backgroundImages[4] = "img/unsplash-5.jpg";
backgroundImages[5] = "img/bg-main.jpg";

var speed = 5000;	// interval between slide (in ms)

// preload images
var imgLoc = new Array();
for (i = 0; i < backgroundImages.length; i++){
	imgLoc[i] = new Image();
	imgLoc[i].src = backgroundImages[i];
}

// counter
var cntr = -1;

// change background
function slideback() {
	if (cntr < backgroundImages.length-1) cntr++;
	else cntr = 0;
	document.body.background = imgLoc[cntr].src;
}

// when page is loaded call function for changing backgrounds
if (document.all || document.getElementById)
	window.onload=function(){slideback(); setInterval(slideback, speed);};
