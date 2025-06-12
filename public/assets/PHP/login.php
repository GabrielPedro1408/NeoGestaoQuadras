<?php
include_once __DIR__ . '/../../assets/PHP/CRUD-Empresa/createEmpresa.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Neo Gestão</title>
</head>

<body>

    <div class="container" id="container">
        <?php
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['error']) . '</div>';
            }
        ?>
        <div class="form-container sign-in">
            <form action="login_process.php" method="post" autocomplete="on">
                <h1>Entrar</h1>
                <br>
                <span>Informe o seu nome de usuário e senha</span>
                <br>
                <input type="text" name="username" id="username" placeholder="Nome de Usuário">
                <input type="text" name="password" id="password" placeholder="Senha">
                <?php
                    if(isset($_GET['error']) && $_GET['error'] == 'incorret'){
                        echo '<p style="color: red;">Nome de usuário ou senha incorretos!</p>';
                    }
                ?>
                <a href="#">Esqueceu a Senha?</a>
                <button type="submit" name="logar">Entar</button>
            </form>
        </div>
    </div>

    <script src="../JS/login.js"></script>
</body>

</html>