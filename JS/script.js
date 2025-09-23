// Navbar toggle
let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

// Scroll active link
let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  section.forEach(sec => {
    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links => links.classList.remove('active'));
      document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
    }
  });
}

// Search form toggle
document.querySelector('#search-icon').onclick = () => {
  document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
  document.querySelector('#search-form').classList.remove('active');
}

// Swiper home slider
var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 3000, // you can adjust
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});

// Swiper review slider (if you have one)
var swiper2 = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: { slidesPerView: 1 },
    640: { slidesPerView: 2 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});

// Loader
window.addEventListener("load", () => {
  document.querySelector('.loader-container').style.display = "none";
});
