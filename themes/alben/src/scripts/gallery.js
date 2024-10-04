import { buildImages } from './helpers';

export default () => {
	const container = document.querySelector( '.js-gallery' );

	if ( ! container ) {
		return null;
	}

	buildImages( container );
}
