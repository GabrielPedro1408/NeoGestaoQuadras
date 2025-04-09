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
        <!-- start top page -->
        <section class="top-page">
        <div class="titulo">
            <h1><strong>Quadras</strong></h1>
        </div>
        <div class="botao">
            <button calss="botao-Adicionar">Adicionar</button>
        </div>
        </section>
            <!-- end top page -->

            <!-- start bottom page -->
            <section class="bottom-page">
            <div class="quadra">
            <form action="#" method="post">
            <label for="nome-quadra"></label>
            <label for="tipo-quadra"></label>
            <label for="horarios"></label>
            <label for="disponibilidade"></label>
            </form>
            <a href="EditarQuadra.php"><button><img src="../images/editar.png" alt=""></button></a>
            <!-- pensar no botão de excluir -->
            <a href="#"><button><img src="../images/excluir.png" alt=""></button></a>
            </div>
        </section>

        <!-- end bottom page -->
    </main>
    <!-- end main -->
</body>
</html>