
// ==================SLIDE_CODE====================
const slides = document.querySelector(".slide-container");
const dots = document.querySelectorAll(".dot");

let slideIndex = 0;
showSlide(slideIndex);

function showSlide(index) {
  slides.style.transform = `translateX(-${index * 100}%)`;

  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });
}

function nextSlide() {
  slideIndex = (slideIndex + 1) % 3;
  showSlide(slideIndex);
}

function prevSlide() {
  slideIndex = (slideIndex - 1 + 3) % 3;
  showSlide(slideIndex);
}

dots.forEach((dot, i) => {
  dot.addEventListener("click", () => showSlide(i));
});

setInterval(nextSlide, 5000);