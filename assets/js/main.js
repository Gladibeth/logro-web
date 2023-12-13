const hamburgerButton = document.querySelector('.hamburger');
const menu = document.querySelector('.main-header__nav');
const htmlHide = document.querySelector('html');
hamburgerButton.addEventListener('click', showMenuMobile);

function showMenuMobile(){
  hamburgerButton.classList.toggle('is-active');
  menu.classList.toggle('active-menu');
  htmlHide.classList.toggle('overlay-hidden');
}

$('.slider-center').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
});

$('.slider-logos').slick({
  dots: false,
  speed: 300,
  slidesToShow: 7,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 10,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1
      }
    }
  ]
});

// main.js
document.addEventListener('DOMContentLoaded', function () {
  // Lee el tema almacenado en localStorage
  const savedTheme = localStorage.getItem('theme');

  // Si hay un tema almacenado, aplica el tema al body
  if (savedTheme) {
    document.body.classList.add(savedTheme);
  }
});

document.getElementById('light-theme').addEventListener('click', function () {
  // Cambia al tema claro
  document.body.classList.remove('dark-theme');
  document.body.classList.add('light-theme');

  // Guarda el tema seleccionado en localStorage
  localStorage.setItem('theme', 'light-theme');
});

document.getElementById('dark-theme').addEventListener('click', function () {
  // Cambia al tema oscuro
  document.body.classList.remove('light-theme');
  document.body.classList.add('dark-theme');

  // Guarda el tema seleccionado en localStorage
  localStorage.setItem('theme', 'dark-theme');
});
