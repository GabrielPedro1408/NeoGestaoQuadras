<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/sidebar.css">
    <script type="module" src="../components/sidebar.js"></script>
    <title>Side-Bar</title>
</head>
<body>
<nav id="sidebar">
<div id="sidebar-content">
    <button id="open-btn">
        <div class="button"><i id="open-btn-icon" class="fa-solid fa-chevron-right fa-xl"></i></div>
    </button>
    <div id="user">
        <p id="user-info">
            <span class="item-description first-item-description">
                <label for="Usuario">Nome Usuario</label>
            </span>
        </p>
    </div>
    <ul id="side-items">
    <li class="side-item" data-item="dashboard">
        <a href="../PHP/dashboard.php">
            <i class="fas fa-chart-line fa-xl"></i>
            <span class="item-description">
                Dashboard
            </span>
        </a>
    </li>
    <li class="side-item" data-item="funcionameto">
        <a href="../PHP/Funcionamento.php">
            <i class="fa-solid fa-wrench"></i>
            <span class="item-description">
                Funcionamento
            </span>
        </a>
    </li>
    <li class="side-item" data-item="quadras">
        <a href="../PHP/Quadras.php">
            <i class="fas fa-person-walking-luggage fa-xl"></i>
            <span class="item-description">
                Quadras
            </span>
        </a>
    </li>
    <li class="side-item" data-item="vendas">
        <a href="../PHP/Agendamentos.php"> 
        <i class="fa-solid fa-calendar fa-xl"></i>
            <span class="item-description"> Agendamentos </span>
        </a>
        <i class="bi bi-caret-down"></i>

    </li>
    <li class="side-item" data-item="clientes">
        <a href="../PHP/Clientes.php">
            <i class="fas fa-user fa-xl"></i>
            <span class="item-description">
                Clientes
            </span>
        </a>
    </li>
    <li class="side-item" data-item="financeiro">
        <a href="../PHP/Financeiro.php">
            <i class="fa-solid fa-dollar-sign fa-xl"></i>
            <span class="item-description">
                Financeiro
            </span>
        </a>
    </li>
    <div id="logout">
    <li class="side-item" data-item="clientes">
        <a href="../PHP/logout.php" style="text-decoration:none">
            <button id="logout-btn">
                <i class="fa-solid fa-arrow-right-from-bracket fas-xxxl"></i>
                    <span class="item-description">Logout</span>
            </button>
        </a>
    </li>
</div>
</ul>

</div>


</nav>
</body>
</html>