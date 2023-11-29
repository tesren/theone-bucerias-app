import './bootstrap';

var navbar = document.getElementById('the-one-navbar');

if(navbar){
  window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var scrollThreshold = 400; // Cambia este valor para ajustar la cantidad de scroll necesaria
  
    if (scrollPosition >= scrollThreshold) {
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-dark');
    } else {
      navbar.classList.remove('bg-dark');
      navbar.classList.add('bg-transparent');
    }
  });
}


var splide = document.getElementById('gallery-home');

document.addEventListener( 'DOMContentLoaded', function() {

  if(splide){
    splide = new Splide( '#gallery-home', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      pagination: false,

      breakpoints: {
        640: {
          perPage: 2,
        },
        480: {
          perPage: 1,
        },
      },

    } );
  
    splide.mount();
  }

} );

window.onload = function() {
  var myModal = document.getElementById('confirmationModal');
  if(myModal){
    myModal = new bootstrap.Modal(myModal);
    myModal.show(myModal);
  }
};