import 'normalize.css';
import {inputForm} from "./input";


$(document).ready(() => {
  $('.owl-carousel').owlCarousel({
    center: true,
    loop: true,
    margin: 50,
    autoWidth: true,
    nav: true,
    navText: ''
  });

  $('#contact-form').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: '/wp-content/themes/garmony/mail.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function( data ) {
        $('.modal-alert').fadeIn('slow').css('display', 'flex');
        $('input[type="text"], input[type="password"], input[type="tel"], input[type="email"], input[type="file"], textarea').val('');
        $('.input-wrapper--input').removeClass('input-wrapper--input');
        setTimeout(function () {
          $('.modal-alert').fadeOut('slow');
        }, 2000)
      }
    });
  });

  $('input').on('input', inputForm);

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
  $("#navToggle").click(function () {
    navToggle();
  });

  const navToggle = () => {
    $('#navToggle').toggleClass("active");
    $(".header-nav").toggleClass("open");
    $("body").toggleClass("locked");
  };

//anhors
  $(".anchor").on("click", function (event) {
    event.preventDefault();
    const id = $(this).attr('href');
    const top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 800);
    if($(window).width() < 992) {
      setTimeout(() => {
        navToggle();
      }, 750)
    }
  });


});

$(window).resize(function () {

});
