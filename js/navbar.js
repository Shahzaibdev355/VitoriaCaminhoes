// -----------------------------------nav bar fixed when scroll--------------------------------//

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    var navbarHeight = header.offsetHeight;

    if (window.scrollY > 50) {
      header.classList.add('fixed-top', 'fade-in');
      document.body.style.paddingTop = navbarHeight + 'px';
    } else {
      header.classList.remove('fixed-top', 'fade-in');
      document.body.style.paddingTop = '0';
    }
  });
});

// -----------------------------------nav bar fixed when scroll--------------------------------//




