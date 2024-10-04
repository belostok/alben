import './styles/main.scss'; // main styles file

// Here is a list of scripts, that must be loaded before the user interaction
import { documentReady } from './scripts/helpers';
import mainSlider from './scripts/main-slider';
import gallery from './scripts/gallery';
import ajaxGallery from './scripts/ajax-gallery';
import modalGallery from './scripts/modal-gallery';
import fullscreen from './scripts/fullscreen';

documentReady( () => {
	mainSlider();
	gallery();
	ajaxGallery();
	modalGallery();
	fullscreen();
} );
