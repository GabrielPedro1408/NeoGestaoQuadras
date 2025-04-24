<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <title>Formulário</title>
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
    <div id="principal">
        <div class="cabecalho">
            <h1>Cadastro de Produtos</h1>
        </div>    
            <div class="formulario">
                <form action="back_prod.php" method="post">

                    <div class="itens">
                        <label for="descr_prod">Descrição:</label>
                        <br>
                        <input type="text" name="descr_prod" id="descr_prod">
                        <br>
                    </div>

                    <div class="itens">
                        <label for="preco">Preço:</label>
                        <br>
                        <input type="number" name="preco" id="preco">
                        <br>
                    </div>

                    <div class="itens">
                        <label for="Qtde_E">Quantidade Estoque:</label>
                        <br>
                        <input type="number" name="Qtde_E" id="Qtde_E">
                        <br>
                    </div>

                    <div class="itens">
                        <label for="garant">Garantia:</label>
                        <br>
                        <input type="text" name="garant" id="garant">
                        <br>
                        <br>
                    </div>

                    <div class="itens">
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
            <form action="alterar_prod.php" method="post">
                <label for="id">Insira o ID do produto:</label>
                <br>
                <input type="text" name="id" id="id">
                <button><i class="fa-solid fa-magnifying-glass"></button>
            </form>
        </div>
    </div>
</main>
</body>

</html>