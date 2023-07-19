// Navigation

function navigateTo(url) {
  window.location.href = url;
}

document.addEventListener("DOMContentLoaded", function() {
  const currentPage = window.location.onclick;
  const menuItems = document.querySelectorAll(".menu li");
  for (let i = 0; i < menuItems.length; i++) {
      const menuItem = menuItems[i];
      const link = menuItem.querySelector("a");
      if (link.getAttribute("href") === currentPage) {
          menuItem.classList.add("current-page");
          break;
      }
  }
});

// Smooth scrolling

function scrollToContact() {
  const contactSection = document.getElementById("contact");
  contactSection.scrollIntoView({ behavior: "smooth" });
}

// Scroll to top

var backToTopBtn = document.querySelector(".back-to-top-btn");

window.addEventListener("scroll", function() {
  if (window.pageYOffset > 300) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
});

backToTopBtn.addEventListener("click", function() {
  smoothScroll("#top", 1000);
});

function smoothScroll(target, duration) {
  var target = document.querySelector(target);
  var targetPosition = target.getBoundingClientRect().top;
  var startPosition = window.pageYOffset;
  var distance = targetPosition - startPosition;
  var startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    var timeElapsed = currentTime - startTime;
    var run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

var backToTopBtn = document.querySelector(".back-to-top-btn");
        
window.addEventListener("scroll", function() {
  if (window.pageYOffset > 300) {
    backToTopBtn.classList.add("show");
  } else {
    backToTopBtn.classList.remove("show");
  }
});

backToTopBtn.addEventListener("click", function() {
  scrollTop(1000);
});

function scrollTop(duration) {
  var position = window.pageYOffset;
  var startingTime = null;
  
  function animation(currentTime) {
    if (startingTime === null) startingTime = currentTime;
    var timeElapsed = currentTime - startingTime;
    var run = ease(timeElapsed, position, -position, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }
  
  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }
  
  requestAnimationFrame(animation);
}

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
