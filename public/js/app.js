import 'bootstrap';

// BANNER SWIPER
const swiper = new Swiper('.swiper-container', {
  loop: true, // Allows infinite scrolling
  lazy: true,
  preloadImages: false,
  autoplay: {
    delay: 5000, // 5 seconds per slide
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// NAVIGATION
document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('.menu-link');
  links.forEach(link => {
      link.addEventListener('click', function (event) {
          event.preventDefault();
          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
              window.scrollTo({
                  top: targetElement.offsetTop,
                  behavior: 'smooth'
              });
          }
      });
  });
});
