<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                <li class="side-item active">
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
    <div class="title">
        <h1>Clientes</h1>
    </div>
    <div class="opcoes">
        <label for="#">Cadastrar</label>
        <label for="#">Consultar</label>
        <label for="#">Alterar</label>
        <label for="#">Excluir</label>
    </div>
    <div class="principal">
        <div class="cabecalho">
            <h2>Cadastro de Clientes</h2>
        </div>    
            <div class="formulario">
                <form action="back_cli.php" method="post">
                    <div class="itens">
                        <br>
                        <label for="nome_cli"">Nome do Cliente:</label>
                        <br>
                        <input type="text" name="nome_cli" id="nome_cli">
                    </div>

                    <div class="itens">
                        <br>
                        <label for="email_cli">Email:</label>
                        <br>
                        <input type="email" name="email_cli" id="email_cli">
                    </div>

                    <div class="itens">
                        <br>
                        <label for="end_cli">Endereço:</label>
                        <br>
                        <input type="text" name="end_cli" id="end_cli">
                    </div>

                    <div class="itens">
                        <br>
                        <label for="tel_cli">Telefone:</label>
                        <br>
                        <input type="text" name="tel_cli" id="tel_cli">
                    </div>

                    <div class="itens">
                        <br>
                        <label for="cpf_cli">Cpf:</label>
                        <br>
                        <input type="text" name="cpf_cli" id="cpf_cli">
                    </div>

                    <div class="itens">
                        <br>
                        <input type="submit" value="Gravar">
                    </div>
                </form>
            </div>
    </div>
    <div class="principal">
        <div class="cabecalho">
            <h2>Alterar</h2>
        </div>
        <div class="formulario">
            <form action="alterar_cli.php" method="post">
                <label for="id">Insira o ID do cliente:</label>
                <br>
                <input type="text" name="id" id="id">
                <button><i class="fa-solid fa-magnifying-glass"></button>
            </form>
        </div>
    </div>
    
</main>

<script src="sidebar.js"></script>
</body>


</html>