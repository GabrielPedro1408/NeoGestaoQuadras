<?php
session_start();
include_once __DIR__ . '../../src/buscarIdEmpresa.php';
if(!isset($_SESSION['username'])){
    header("Location: login.php?error=Você precisa fazer login para acessar esta página.");
    exit;
}
include_once 'conexao.php';
if($_SERVER ['REQUEST_METHOD'] === "POST"){
    include_once './modalQuadras/CRUD/createQuadras.php';
}
$username = $_SESSION['username'];
$id_empresa = buscarIdEmpresa($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/quadras.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/PopUpExcluir.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.css">
    <title>Quadras</title>
</head>
<body>
<div class="full-content">
    <?php include '../components/sidebar.php'; ?>
    <div id="main-content">
    <?php include '../components/header.php' ; ?>

    <!-- PopUps -->
        <?php include_once "./modalQuadras/cadastroQuadra.php"; ?>
            <!-- buscar cliente -->
        <?php include_once "./modalQuadras/buscarQuadra.php"; ?>
            <!-- editar cliente -->
        <?php include_once "./modalQuadras/editarQuadra.php"; ?>
            <!-- excluir cliente -->
        <?php include_once "./modalQuadras/excluirQuadra.php"; ?>
            <!-- iformação cliente -->
        <?php include_once "./modalQuadras/infoQuadra.php"; ?>
    <!-- PopUps -->

        <main>
             <?php
            /* mensagem de sucesso */
                if (isset($_SESSION['message'])):
                    $type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'info';
                ?>
                    <div class="alert alert-<?= $type ?> alert-dismissible fade show alert-top-fixed" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                endif;

            /* card total quadras */
            $queryTotal = $pdo ->prepare(
                "SELECT
                count(*) AS total_quadras
                FROM
                quadras"
            );
            $queryTotal -> execute();
            $resultQuadras = $queryTotal -> fetchAll(PDO::FETCH_ASSOC);

            $totalQuadras = [];
            foreach($resultQuadras as $quadraCount){
                $totalQuadras[] = $quadraCount['total_quadras'];
            }
            ?>
            <div class="container">
                <section class="top-area">
                    <div class="titulo">
                        <h3><strong>GERENCIAMENTO DE QUADRAS</strong></h3>
                    </div>
                    <div class="adicionar">
                        <button id='openPopUpCadastro' class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalCadastro">+ Nova Quadra</button>
                    </div>
                </section>         
                    <div class="mid-area">
                        <div class="pesquisar">
                            <h6>BUSCAR</h6>
                            <div class="main-pesquisar">
                                <form action="" method="post">
                                    <div class="group">
                                        <input type="text"  name="nomeQuadra" id="nomeQuadra" placeholder="Nome da Quadra">
                                    </div>
                                    <div class="group">
                                         <select class="form-select" aria-label="Default select example" name="modalidadeQuadra">
                                            <option id="opFutebolSociety" value="1">Futebol Society</option>
                                            <option id="opFutsal" value="2">Futsal</option>
                                            <option id="opVoleiPraia" value="3">Vôlei de Praia</option>
                                            <option id="opBasquete" value="4">Basquete</option>
                                            <option id="opTenis" value="5">Tênis</option>
                                            <option id="opBeachTennis" value="6">Beach Tennis</option>
                                            <option id="opHandebol" value="7">Handebol</option>
                                            <option id="opPadel" value="8">Padel</option>
                                            <option id="opPeteca" value="9">Peteca</option>
                                            <option id="opBadminton" value="10">Badminton</option>
                                            <option id="opHoqueiIndoor" value="11">Hóquei Indoor</option>
                                            <option id="opFutebolAreia" value="12">Futebol de Areia</option>
                                            <option id="opVoleiIndoor" value="13">Vôlei Indoor</option>
                                            <option id="opBasquete3x3" value="14">Basquete 3x3</option>
                                            <option id="opSquash" value="15">Squash</option>
                                            <option id="opFutebolInfantil" value="16">Futebol Infantil</option>
                                            <option id="opTenisMesa" value="17">Tênis de Mesa</option>
                                            <option id="opPickleball" value="18">Pickleball</option>
                                            <option id="opFutebolAmericanoFlag" value="19">Futebol Americano Flag</option>
                                            <option id="opRugbyTouch" value="20">Rugby Touch</option>
                                        </select>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="total-quadras">
                        <div class="grupo">
                            <h6>TOTAL DE QUADRAS</h6>
                            <div class="main-total-quadras">
                                <h1><label for="totalQuadras"><?=$totalQuadras[0]?></label></h1>
                                <div class="icone-total">
                                    <i class="fa-solid fa-futbol fa-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- start tableCli  -->
                    <div class="table-clientes">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Modalidade</th>
                                <th scope="col">Disponibilidade</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>                                    
                            <?php
                            $username = $_SESSION['username'];
                            $id_empresa = buscarIdEmpresa($username);
                                $queryQuadra = $pdo->prepare(
                                "SELECT
                                q.id,
                                q.descr,
                                q.id_modalidade,
                                q.disponibilidade,
                                q.valor_hora,
                                modalidade_quadra.descr AS modalidade_descr

                                FROM
                                quadras q

                                JOIN
                                modalidade_quadra ON q.id_modalidade = modalidade_quadra.id
                                
                                WHERE 
                                id_empresa = :id_empresa LIMIT 10
                                ");
                                $queryQuadra->execute(array(':id_empresa' => $id_empresa));
                                $Quadras = $queryQuadra->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($Quadras as $quadra): 
                                ?>
                                <tr>
                                    <td scope ='row'><label for='nomeQuadra'><?=$quadra['descr']?></label></td>
                                    <td><label for='modalidadeQuadra'><?=$quadra['modalidade_descr']?></label></td>
                                    <td><label for='disponibilidadeQuadra'><?php if ($quadra['disponibilidade'] == 0){
                                        echo "Disponível";
                                    }
                                    else {
                                        echo "Indisponível";
                                    }
                                    ?></label></td>
                                    <td><label for='valoragendQuadra'>R$ <?=$quadra['valor_hora']?></label></td>
                                    <td class='icons-item'>
                                        <a id='openPopUpEditar' href='#'><i  class='fa-solid fa-pen-to-square first'></i></a>
                                        <a id='openPopUpExcluir'href='#'><i class='fa-solid fa-trash second'></i></a>
                                        <a id='openPopUpInfo'href='#'><i class='fa-solid fa-circle-info third'></i></a>
                                    </td>   
                                </tr>
                            <?php
                             endforeach; 
                            ?>
                            </tbody>
                        </table>
                        <div class="footer-table">
                            <div class='esquerda'>
                                <h3>Listando</h3>
                            <?php 
                             /* foreach($pages as $page): */
                            ?>
                                <div class='labels'><label for='paginaAtual'>1</label> <p>/</p> <label for='totalPaginas'>7</label></div></div>
                                <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a></div>

                            <?php
                             /* endforeach;  */
                            ?>
                        </div>
                    </div>     
                </div>
            </div>
        </main>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../components/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>