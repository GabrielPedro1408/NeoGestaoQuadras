class HeaderComponente extends HTMLElement {
    constructor() {
      super();
      const shadow = this.attachShadow({ mode: 'open' });
      const style = document.createElement('style');
      const header = document.createElement('header');
      header.id = 'header';
      header.innerHTML = `
        <div id="logo">
          <img src="../images/financeiro.png" alt="Logo">
          <h1 id="title">NEO GESTÃO</h1>
        </div>
        <div id="user-info">
          <h1 id="usuario">Nome Usuário</h1>
          <img src="../images/perfil (2).png" alt="User Avatar">
        </div>
      `;
  
      style.textContent = `
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
        @import url('https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap');
        #header {
          width: 100vw;
          height: 80px;
          background-color: #042940;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 0 30px;
          box-sizing: border-box;
          font-family: "Cabin", sans-serif;
          font-size: 22px;
          border-bottom: 2px solid black;
        }
        #logo {
          display: flex;
          align-items: center;
        }
        #logo img {
          height: 60px;
          margin-right: 35px;
          margin-left: 15px;
        }
        #title {
          color:rgb(226, 215, 60);
          margin: 0;
          text-shadow: 1px 1px 2px white;
        }
        #usuario{
          color:rgb(226, 215, 60);
          margin: 0;
          }
        #user-info {
          display: flex;
          align-items: center;
        }
        #user-info h1 {
          color: #ffffff;
          margin: 0 10px;
        }
        #user-info img {
          height: 60px;
          margin-left:35px;
        }
      `;

      shadow.appendChild(style);
      shadow.appendChild(header);
    }
  }

  customElements.define('header-componente', HeaderComponente);