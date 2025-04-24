<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['nome'])){
    header('Location: index.php');
    exit();
}
?>
<nav id="sidebar">
        <div id="sidebar-content">
            <div id="user">
                <img src="images/henderson_.jpeg" alt="Avatar" id="user-avatar">

                <p id="user-info">
                    <span class="item-description">
                        Henderson Baitolão
                    </span>
                    <span class="item-description">
                        Professor de Web
                    </span>
                </p>
            </div>

            <ul id="side-items">
                <li class="side-item">
                    <a href="dashboard.php">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="Cliente.php">
                        <i class="fa-solid fa-person-walking-luggage"></i>
                        <span class="item-description">
                            Clientes
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="Produto.php">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="item-description">
                            Produto
                        </span>
                    </a>
                </li>
                <li class="side-item active">
                    <a href="user.php">
                        <i class="fa-solid fa-user  "></i>
                        <span class="item-description">
                            User
                        </span>
                    </a>
                </li>
            </ul>

            <button id="open-btn">
                <i id="open-btn-icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <a href="logout.php" style="text-decoration:none">
                <button id="logout-btn">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="item-description">
                        Logout
                    </span>
                </button>
            </a>
        </div>
</nav>
<main>
<div class="principal">
        <div class="cabecalho">
            <h2>Alterar</h2>
        </div>
        <div class="formulario">
            <form action="alterar_user.php" method="post">
                <label for="id">Insira o ID do usuário:</label>
                <br>
                <input type="text" name="id" id="id">
                <button><i class="fa-solid fa-magnifying-glass"></button>
            </form>
        </div>
    </div>
    <div class="principal">    
        <div class="cabecalho">
            <h2>Excluir</h2>
        </div>
        <div class="formulario">
            <form action="excluir_user.php" method="post">
                <label for="id_cli">Insira o ID do usuário que deseja excluir:</label>
                <br>
                <input type="text" name="id" id="id">
                <button class="fa-solid fa-trash"></button>
            </form>
        </div>
    </div>
</main>
<script src="sidebar.js"></script>
</body>
</html>