var blogLinkText = document.querySelectorAll(".blogLink")

function textGreen() {
	this.style.color = "rgb(146, 208, 80)";
	this.onmouseup = textBlack;
}
function textBlack() {
	this.style.color = "black";
}

while (true) {
	for(var i=0; i<blogLinkText.length; i++;) {
		blogLinktext[i].onmaousedown = textGreen;
	}
}