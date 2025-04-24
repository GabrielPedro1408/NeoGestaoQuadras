<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>União</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="cadastro.php" method="post">
                <h1>Ciar uma conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Preencha os campos com seu dados</span>
                <input type="text" name="username" id="username" placeholder="Nome de Usuário">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Senha">
                <button>Cadastrar-se</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post" autocomplete="on">
                <h1>Entrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Informe o seu nome de usuário e senha</span>
                <input type="text" name="username" id="username" placeholder="Nome de Usuário">
                <input type="password" name="password" id="password" placeholder="Senha">
                <?php
                    if(isset($_GET['error']) && $_GET['error'] == 'incorret'){
                        echo '<p style="color: red;">Nome de usuário ou senha incorretos!</p>';
                    }
                ?>
                <a href="#">Esqueceu a Senha?</a>
                <button>Entar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Use seus dados ja cadastrados para entrar</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, amigo!</h1>
                    <p>Cadastre seus dados para desfrutar</p>
                    <button class="hidden" id="register">Cadastrar-se</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>