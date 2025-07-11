<?php
session_start();
include_once __DIR__ . '../../src/buscarIdEmpresa.php';
if(!isset($_SESSION['username'])){
    header("Location: login.php?error=Você precisa fazer login para acessar esta página.");
    exit;
}
include_once 'conexao.php';
$username = $_SESSION['username'];
$id_empresa = buscarIdEmpresa($username);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/funcionamento.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <title>NPL Quadras</title>

</head>
<body>
<script>
  localStorage.setItem('activeItem', 'funcionamento');
</script>
<div class="full-content">
    <?php require '../components/sidebar.php';?>
    <div id="main-content">
    <?php require '../components/header.php' ;?>
        <main>
            <div class="container">
                <div class="titulo">
                    <h1><strong>Funcionamento</strong></h1>
                    <img src="../images/raphax.jpg" alt="10 meu melhor amg pfto" class="img-fluid">
                </div>
            </div>

        </main>
    </div>
</div>
<script src="../components/sidebar.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>