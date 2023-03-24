import './bootstrap';
import './bootstrap.bundle.min.js';

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('the-one-navbar');
    var scrollPosition = window.scrollY;
    var scrollThreshold = 500; // Cambia este valor para ajustar la cantidad de scroll necesaria
  
    if (scrollPosition >= scrollThreshold) {
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-dark');
    } else {
      navbar.classList.remove('bg-dark');
      navbar.classList.add('bg-transparent');
    }
});
  