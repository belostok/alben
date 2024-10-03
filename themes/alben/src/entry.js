import './styles/main.scss'; // main styles file

// Here is a list of scripts, that must be loaded before the user interaction
import { documentReady } from './scripts/helpers';
import mainSlider from './scripts/main-slider';

documentReady( () => {
	mainSlider();
} );
