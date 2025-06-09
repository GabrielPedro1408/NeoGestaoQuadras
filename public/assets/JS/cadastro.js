document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');
    const nextBtns = document.querySelectorAll('.next');
    const prevBtns = document.querySelectorAll('.prev'); // se quiser botões de voltar
    let currentStep = 0;

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle('active', i === index);
        });
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

    // Se quiser botões de voltar:
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