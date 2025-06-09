document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.carousel-img');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let current = 0;

    function showImage(index) {
        images.forEach((img, i) => {
            img.classList.toggle('active', i === index);
        });
    }

    prevBtn.addEventListener('click', () => {
        current = (current - 1 + images.length) % images.length;
        showImage(current);
    });

    nextBtn.addEventListener('click', () => {
        current = (current + 1) % images.length;
        showImage(current);
    });
});