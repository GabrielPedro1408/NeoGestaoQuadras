<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="module" src="../components/sidebar.js"></script>
    <script type="module" src="../components/header.js"></script>
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <title>NPL Quadras</title>

</head>
<body>
    
    <?php
        require '../components/header.php';
        require '../components/sidebar.php';
    ?>

    <!-- start main -->
    <main>
        <!-- start title -->
        <div class="titulo">
            <h1><strong>Clientes</strong></h1>
        </div>
        <!-- end title -->
        <!-- start forms cadastro --> 
        <div class="formulario-cadastro">
            <form action="#" method="post" id="cadastroClientes">
                <div class="itemText">
                    <label for="nomeCli">Nome</label>
                    <input type="text" name="nomeCli" id="nomeCli">
                </div>
            </form>
        </div>
         <!-- end forms cadastro --> 
    </main>
    <!-- end main -->
    
    <!-- start footer -->
    <footer>

    </footer>
    <!-- end footer -->
</body>
</html>