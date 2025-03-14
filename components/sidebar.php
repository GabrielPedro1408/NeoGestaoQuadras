<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <script type="module" src="../components/sidebar.js"></script>
    <title>Side-Bar</title>
</head>
<body>
<nav id="sidebar">
        <div id="sidebar-content">
          <ul id="side-items">

            <div class="menu-image">
            <div id="menu-image">
              <li class="side-item active">
              <button id="open-btn">
                <a href="#"><i class="fas fa-bars fa-2xl"></i></a>
              </button>
              </div>
              </li>
            </div>
            <li class="side-item active">
              <a href="Dashboard.php">
                <i class="fas fa-chart-line fa-xl"></i>
                <span class="item-description">
                  Dashboard
                </span>
              </a>
            </li>
            <li class="side-item">
              <a href="Financeiro.php">
                <i class="fa-solid fa-dollar-sign fa-xl"></i>
                <span class="item-description">
                  Financeiro
                </span>
              </a>
            </li>
            <li class="side-item">
              <a href="Serviços.php">
                <i class="fas fa-person-walking-luggage fa-xl"></i>
                <span class="item-description">
                  Serviços
                </span>
              </a>
            </li>
            <li class="side-item">
              <a href="Vendas.php">
                <i class="fas fa-bag-shopping fa-xl"></i>
                <span class="item-description">
                  Vendas
                </span>
              </a>
            </li>
            <li class="side-item">
              <a href="Clientes.php">
                <i class="fas fa-user fa-xl"></i>
                <span class="item-description">
                  Clientes
                </span>
              </a>
            </li>
          </ul>


        </div>

        <div id="logout">
          <a href="logout.php" style="text-decoration:none">
            <button class="side-item" id="logout-btn">
              <i class="fas fa-arrow-right-from-bracket fa-xl" alt="sair"></i>
            </button>
          </a>
        </div>
      </nav>
</body>
</html>