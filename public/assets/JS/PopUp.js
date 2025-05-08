const openBtn = document.getElementById('openPopUp');
const closeBtn = document.getElementById('closePopUp');
const modal = document.getElementById('modal');

// Adiciona a classe "open" ao modal quando o link é clicado
openBtn.addEventListener('click', (event) => {
    event.preventDefault(); // Previne o comportamento padrão do link
    modal.classList.add('open');
});

// Remove a classe "open" do modal quando o botão é clicado
closeBtn.addEventListener('click', () => {
    modal.classList.remove('open');
});