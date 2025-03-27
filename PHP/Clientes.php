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
        require '../components/sidebar.php';
        require '../components/header.php' ;
    ?>

    <!-- start main -->
    <main>
        <!-- start title -->
        <div class="titulo">
            <h1><strong>Clientes</strong></h1>
        </div>
        <!-- end title -->
        <!-- start principal -->
        <div class="principal">
            <!-- start "table"  -->
            <div id="top-area">
                <!-- start formPesquisar  -->
                <div class="pesquisar">
                    <form action="#" method="post">
                        <label for="txtNome">Nome:</label>
                        <input type="text" name="txtNome" id="txtNome">
                        <label for="txtTel">Celular:</label>
                        <input type="text" name="txtTel" id="txtTel">
                        <label for="txtCpf">CPF:</label>
                        <input type="text" name="txtCpf" id="txtCpf">
                    </form>
                </div>
                <!-- end formPesquisar  -->
                 <!-- start adicionarCli  -->
                <div class="adicionar">
                    <button type="button">+Adicionar</button><!-- colocar um pop-up aqui-->
                </div>
                <!-- end adiocionarCli  -->
                <!-- start tableCli  -->
                    <!-- Criar Tabela  -->
                <!-- end tableCli  -->     
            </div>
            

        </div>
        <!-- end principal -->
    </main>
    <!-- end main -->
    
    <!-- start footer -->
    <footer>

    </footer>
    <!-- end footer -->
</body>
</html>