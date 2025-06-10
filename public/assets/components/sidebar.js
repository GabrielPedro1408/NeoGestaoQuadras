document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  const openBtn = document.getElementById('open-btn');
  const mainContent = document.getElementById('main-content'); // Seleciona o #main-content

  // Alterna a classe 'open-sidebar' no clique do botão
  openBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open-sidebar');
    if (sidebar.classList.contains('open-sidebar')) {
      mainContent.style.marginLeft = '265px'; // Largura do sidebar aberto
      openBtn.style.marginRight = '5px';
      // Largura do sidebar aberto
    } else {
      mainContent.style.marginLeft = '150px';
      openBtn.style.marginRight = '50px'; // Largura do sidebar fechado
    }
  });

  // Restaura o estado inicial do sidebar e do main-content
  if (sidebar.classList.contains('open-sidebar')) {
    mainContent.style.marginLeft = '265px';
  } else {
    mainContent.style.marginLeft = '150px';
  }
});

const sideItems = document.querySelectorAll('.side-item');

function clearActiveClass() {
  sideItems.forEach(item => item.classList.remove('active'));
}

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

restoreActiveItem();