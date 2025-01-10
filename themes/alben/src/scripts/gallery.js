import { buildImages, isMobile } from './helpers';

export default () => {
	if ( isMobile ) {
		return null;
	}

	const container = document.querySelector( '.js-gallery' );

	if ( ! container ) {
		return null;
	}

	buildImages( container );
}
