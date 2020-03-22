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

// menu mobile
  $("#navToggle").click(function() {
    $(this).toggleClass("active");
    $(".header-nav").toggleClass("open");
    $("body").toggleClass("locked"); 
});


//anhors
$(".anhors").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
      top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 800);
});



});

$(window).resize(function () {

});
