//console.log('hello');


/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// import Places from 'places.js'


// let inputAddress = document.querySelector('#property_address')
// if (inputAddress !== null) {
//     let place = Places ({
//         container: inputAddress
//     })
//     place.on('change', e => {
//         document.querySelector('#property_city').value = e.suggestion.city
//         document.querySelector('#property_postal_code').value = e.suggestion.postcode
//         document.querySelector('#property_lat').value = e.suggestion.latlng.lat
//         document.querySelector('#property_lng').value = e.suggestion.latlng.lng
//     })
// }
