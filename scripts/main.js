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