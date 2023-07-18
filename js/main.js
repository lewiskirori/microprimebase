// Nav

function navigateTo(url) {
  window.location.href = url;
}

// Smooth scrolling

const scrollLinks = document.querySelectorAll('.scroll-link');

scrollLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    target.scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Toggle menu

const menuIcon = document.getElementById('menu-icon');
const menuCloseIcon = document.getElementById('menu-icon-close');
const menu = document.getElementById('menu');

menuIcon.addEventListener('click', function () {
    menu.classList.toggle('show');
    menuCloseIcon.classList.toggle('show');
});

menuCloseIcon.addEventListener('click', function () {
    menu.classList.remove('show');
    menuCloseIcon.classList.remove('show');
});