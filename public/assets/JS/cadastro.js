document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');
    const nextBtns = document.querySelectorAll('.next');
    const prevBtns = document.querySelectorAll('.prev');
    const fills = document.querySelectorAll('.bar .fill');
    const numbers = document.querySelectorAll('.pagination .number');
    let currentStep = 0;

    function updateProgressBar(step) {
        fills.forEach((fill, i) => {
            if (i < step) {
                fill.style.width = "100%";
            } else {
                fill.style.width = "0";
            }
        });
        numbers.forEach((number, i) => {
            if (i <= step) {
                number.classList.add('active');
            } else {
                number.classList.remove('active');
            }
        });
    }

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle('active', i === index);
        });
        updateProgressBar(index);
    }

    nextBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    showStep(currentStep);
});