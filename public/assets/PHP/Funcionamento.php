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

    <?php include_once "./modalFuncionamento/editarFuncionamento.php"; ?>
        <main>
            <div class="container">
                <section class="top-area">
                    <div class="titulo">
                        <h3><strong>GERENCIAMENTO DE FUNCIONAMENTO</strong></h3>
                    </div>
                    <div class="editar">
                        <button id='openPopUpEditar' class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalEditar">EDITAR</button>
                    </div>
                </section>

            <div class="cards">
            <div class="card">
                <h3>HORÁRIO DE ABERTURA :</h3>
                <div class="time">11:30</div>
                    <div class="icone-total">
                        <i class="fa-solid fa-school-circle-check fa-xl"></i>
                    </div>
            </div>

            <div class="card">
                <h3>INTERVALO DE TEMPO:</h3>
                <div class="time">30<span class="minutos">minutos</span></div>
                  <div class="icone-total">
                        <i class="fa-solid fa-clock fa-xl"></i>
                    </div>
            </div>

            <div class="card">
                <h3>HORÁRIO DE FECHAMENTO :</h3>
                <div class="time">23:30</div>
               <div class="icone-total">
                        <i class="fa-solid fa-school-circle-xmark fa-xl"></i>
                </div>
            </div>
            </div>
  </div>

</body>
</html>

        </main>
    </div>
</div>
<script src="../components/sidebar.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>