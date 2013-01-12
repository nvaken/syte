(function(){

	var nav = document.getElementById("main-nav"),
		navText = document.createTextNode("Menu"),
		navButton = document.createElement("a");
	
	if (nav) {
	
		nav.className+= ' closed';

		navButton.appendChild(navText);
		navButton.className = 'nav-mobile-button closed';

		navButton.addEventListener("click", function(){
				var nav = document.getElementById("main-nav");
				if (nav.className.indexOf('closed') !== -1) {
					nav.className = nav.className.replace('closed','opened');
					this.className = this.className.replace('closed','opened');
				}
				else {
					nav.className = nav.className.replace('opened','closed');
					this.className = this.className.replace('opened','closed');
				}
			}, false);

		nav.parentNode.insertBefore(navButton,nav);
		
	}
	
})();