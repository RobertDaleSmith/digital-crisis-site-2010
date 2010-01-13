function create_iframe() {
	var ifr = document.createElement('iframe');
	ifr.src= ''+iframe_page+'';
	ifr.scrolling='no';
	ifr.frameBorder = "0";
	ifr.style.width = iframe_width;
	ifr.style.height = iframe_height; 
	ifr.allowTransparency="true";
	document.getElementById(iframe_insert).appendChild(ifr);
}
