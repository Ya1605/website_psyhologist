(function () {
    const slider = document.querySelector('.reviews__slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.review');
    const prev = slider.querySelector('.reviews__arrow--prev');
    const next = slider.querySelector('.reviews__arrow--next');
    let current = 0;

    function show(index) {
        slides[current].classList.remove('is-active');
        current = (index + slides.length) % slides.length;
        slides[current].classList.add('is-active');
    }
    
    prev.addEventListener('click', () => show(current - 1));
    next.addEventListener('click', () => show(current + 1));
})();