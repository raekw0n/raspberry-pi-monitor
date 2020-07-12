import 'bootstrap';
import gsap from 'gsap';
import App from './app';

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faBars, faArrowCircleDown, faArrowCircleUp } from '@fortawesome/free-solid-svg-icons';

library.add(faBars, faArrowCircleDown, faArrowCircleUp);
dom.watch();

window.$ = jQuery;
window.gsap = gsap;
window.App = App;