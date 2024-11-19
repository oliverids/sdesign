// HEADER ===================
const header = document.querySelector('.header'),
  menuButton = document.querySelector('.header__menu');

menuButton.addEventListener('click', () => {
  header.classList.toggle('--ativo');

  if (header.classList.contains('--ativo')) {
    document.body.classList.add('overflow-hidden');
  } else {
    document.body.classList.remove('overflow-hidden');
  }
});

// SWIPER ===================
new Swiper(".sobre-slider", {
  slidesPerView: 1,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  loop: true
});
