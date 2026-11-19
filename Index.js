// Слайдер
let slides = document.querySelectorAll('.slider img');
let currentIndex = 0;
let interval = setInterval(nextSlide, 3000);

function showSlide(index) {
    slides[currentIndex].classList.remove('showing');
    currentIndex = (index + slides.length) % slides.length;
    slides[currentIndex].classList.add('showing');
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

document.getElementById('next').onclick = function () {
    nextSlide();
    clearInterval(interval);
    interval = setInterval(nextSlide, 3000);
};

document.getElementById('previous').onclick = function () {
    prevSlide();
    clearInterval(interval);
    interval = setInterval(nextSlide, 3000);
};

// Отзывы 

$( document ).ready(function() {
    $('input').change(function() {
      var n = $('input').val();
      if (n < 0)
        $('input').val(0);
      if (n > 5)
        $('input').val(5);
    });
});
