new Swiper('.card-wrapper', {
  loop: true,
  slidesPerView: 'auto',
  spaceBetween: 30,
  breakpoints: {
    768: { // Para dispositivos maiores
      slidesPerView: 4, // Exibe mais slides por vez
    },
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    0:{
      slidesPerView: 1
    },
    768:{
      slidesPerView: 2
    },
    1024:{
      slidesPerView: 4
    },
  }
});