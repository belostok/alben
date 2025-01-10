export default () => {
	document.addEventListener('click', (e) => {
		const target = e.target;

		if ( ! target ) {
			return null;
		}

		if ( target.classList.contains('js-menu-button') ) {
			const nav = target.closest('.js-header-nav');

			if ( ! nav ) {
				return null;
			}

			nav.classList.toggle('alben-header__nav_active');
		}
	});
}
