document.getElementById('open-btn').addEventListener('click', function () {
  document.getElementById('sidebar').classList.toggle('open-sidebar');
});

// Seleciona todos os itens do menu
const sideItems = document.querySelectorAll('.side-item');

// Função para remover a classe 'active' de todos os itens
function clearActiveClass() {
  sideItems.forEach(item => item.classList.remove('active'));
}

// Restaura o item ativo do localStorage
function restoreActiveItem() {
  const activeItem = localStorage.getItem('activeItem');
  clearActiveClass(); // Remove a classe 'active' de todos os itens
  if (activeItem) {
    const item = document.querySelector(`.side-item[data-item="${activeItem}"]`);
    if (item) {
      item.classList.add('active');
    }
  }
}

// Adiciona o evento de clique para cada item
sideItems.forEach(item => {
  item.addEventListener('click', function () {
    // Remove a classe 'active' de todos os itens
    clearActiveClass();
    // Adiciona a classe 'active' ao item clicado
    this.classList.add('active');
    // Salva o item ativo no localStorage
    const itemName = this.getAttribute('data-item');
    localStorage.setItem('activeItem', itemName);
  });
});

// Restaura o estado do item ativo ao carregar a página
restoreActiveItem();