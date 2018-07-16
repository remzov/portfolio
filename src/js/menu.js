(function() {

	let menuBtn = document.querySelector('.menu-btn');
	let menuNav = document.querySelector('.menu-nav');

	menuBtn.addEventListener('click', () => {
		menuBtn.classList.toggle('menu-btn_isOpened');
		menuNav.classList.toggle('menu-nav_isOpened');
	})

})();