export const documentReady = ( fn ) => {
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', fn );
	} else {
		fn();
	}
};

export const buildImages = ( container ) => {
	const images = Array.from( container.querySelectorAll( 'img' ) );

	if ( ! images || ! images.length ) {
		return null;
	}

	const containerWidth  = container.clientWidth;
	const gap             = 10;
	let row               = [];
	let rowAspectRatioSum = 0;

	images.forEach( img => {
		const aspectRatio = img.naturalWidth / img.naturalHeight;
		row.push( { img, aspectRatio } );
		rowAspectRatioSum += aspectRatio;

		if ( rowAspectRatioSum >= containerWidth / img.naturalHeight ) {
			const scaleFactor = ( containerWidth - gap * ( row.length - 1 ) ) / rowAspectRatioSum;

			row.forEach( item => {
				const width           = item.aspectRatio * scaleFactor;
				item.img.style.width  = `${ width }px`;
				item.img.style.height = `${ scaleFactor }px`;
			} );

			row               = [];
			rowAspectRatioSum = 0;
		}
	} );
}
