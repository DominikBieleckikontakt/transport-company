import 'bootstrap';

// BANNER SWIPER
const swiper = new Swiper('.swiper-container', {
  loop: true,
  lazy: true,
  preloadImages: false,
  autoplay: {
    delay: 5000,
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

// SLIDE IN
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll('.card');
  const items = document.querySelectorAll('.item');
  let delayIncrement = window.innerWidth < 768 ? 100 : 200; 

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('in-view');
        }, index * delayIncrement); 

        observer.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  cards.forEach(card => {
    observer.observe(card);
  });

  items.forEach(item => {
    observer.observe(item);
  })
});
