/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

const $ = require('jquery');
const bootstrap = require('bootstrap');

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));

var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {

return new bootstrap.Popover(popoverTriggerEl);

});
// start the Stimulus application
import './bootstrap';


console.log('Hello Webpack Encore !')