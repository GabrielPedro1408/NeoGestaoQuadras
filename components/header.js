class HeaderComponente extends HTMLElement {
    constructor() {
      super();
      const shadow = this.attachShadow({ mode: 'open' });
      const style = document.createElement('style');
      const header = document.createElement('header');
      header.id = 'header';
      header.innerHTML = `
        <div id="logo">
          <img src="#" alt="Logo">
          <h1 id="title">NEO GESTÃO</h1>
        </div>
        <div id="user-info">
          <h1 id="usuario"></h1>
          <img src="#" alt="User Avatar">
        </div>
      `;
  
      style.textContent = `
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
  
        #header {
          width: 100%;
          height: 80px;
          background-color: #042940;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 0 30px;
          box-sizing: border-box;
        }
        #logo {
          display: flex;
          align-items: center;
        }
        #logo img {
          height: 60px;
          margin-right: 70px;
        }
        #title {
          color: #ffffff;
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
        }
      `;

      shadow.appendChild(style);
      shadow.appendChild(header);
    }
  }

  customElements.define('header-componente', HeaderComponente);