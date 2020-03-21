import 'normalize.css';
import {inputForm} from "./input";


$(document).ready(() => {

  $('.form form .input-wrapper input').on('input', inputForm);

  // magnific popup
  $('.gallery-content').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery: {
      enabled: true
    },
    removalDelay: 600,
    mainClass: 'mfp-fade'
  });


});

$(window).resize(function () {

});
