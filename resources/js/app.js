import './bootstrap';
import './bootstrap.bundle.min.js';
import './splide.min.js';

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('the-one-navbar');
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


  var splide = document.getElementById('gallery-home');

  window.addEventListener('load', function() {
    // aquí puedes poner el código que deseas ejecutar después de que se hayan cargado todos los recursos de la página
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
    
  });