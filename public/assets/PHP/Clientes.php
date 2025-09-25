<?php 
session_start();

include_once __DIR__ . '../../src/buscarIdEmpresa.php';

include_once 'conexao.php';
if(!isset($_SESSION['username'])) {
    header('Location: login.php?error=Você precisa fazer login para acessar esta página.');
    exit();
}
if($_SERVER ['REQUEST_METHOD'] === "POST"){
    include_once './modalCliente/CRUD/createCliente.php';
}
$username = $_SESSION['username'];
$id_empresa = buscarIdEmpresa($username);
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/clientes.css">
    <link rel="stylesheet" href="../components/mensagem.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.css">
    <script type="module" src="../JS/PopUpBuscar.js"></script>
    <script type="module" src="../JS/PopUpEditar.js"></script>
    <script type="module" src="../JS/PopUpExcluir.js"></script>
    <script type="module" src="../JS/PopUpInfo.js"></script>
    <title>Neo Gestão</title>
</head>
<body>
<div class="full-content">
    <?php require '../components/sidebar.php'; ?>
    <div id="main-content">
    <?php require '../components/header.php' ; ?>
    <!-- PopUps -->
            <!-- cadastrar cli/modalClienteente -->
        <?php include_once "./modalCliente/cadastroCli.php"; ?>
            <!-- buscar cliente -->
        <?php include_once "./modalCliente/buscarCli.php"; ?>
            <!-- editar cliente -->
        <?php include_once "./modalCliente/editarCli.php"; ?>
            <!-- excluir cliente -->
        <?php include_once "./modalCliente/excluirCli.php"; ?>
            <!-- iformação cliente -->
        <?php include_once "./modalCliente/infoCli.php"; ?>

<!-- PopUps -->

        <main>
            <?php
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
            
            $queryClientes = $pdo -> prepare(
            "SELECT
            count(*) AS total_clientes
            FROM
            clientes
            WHERE
            id_empresa = :id_empresa
            ");
            $queryClientes -> bindParam(':id_empresa', $id_empresa, PDO::PARAM_INT);
            $queryClientes -> execute();
            $resultClientes = $queryClientes ->fetchAll(PDO::FETCH_ASSOC);
            $total_clientes = [];
            foreach($resultClientes as $cliente){
                $total_clientes[] = $cliente['total_clientes'];
            }
            
            ?>
            <div class="container">
                <section class="top-area">
                    <div class="titulo">
                        <h3><strong>GERENCIAMENTO DE CLIENTES</strong></h3>
                    </div>
                    <div class="adicionar">
                        <button id='openPopUpCadastro' class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalCadastro">+ Novo Cliente</button>
                    </div>
                </section>
                <div class="mid-area">
                    <div class="pesquisar">
                        <div class="title-pesquisar">
                            <i class="fas fa-filter fa-xl"></i>
                            <h4> Filtros</h4>
                        </div>
                        <div class="main-pesquisar">
                            <form action="" method="get">
                                <div class="group">
                                    <input type="text"  name="nomeCli" id="nomeCli" placeholder="Buscar por Nome">
                                </div>
                                <div class="group">
                                    <input type="text" name="cpfCli" id="cpfCli" placeholder="Buscar por CPF">
                                </div>
                                <div class="group">
                                    <input type="text" name="telefoneCli" id="telefoneCli" placeholder="Buscar por Telefone">
                                </div>
                                <div class="button">
                                    <button name="filtrar" type="submit">Filtrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="total-clientes">
                        <div class="grupo">
                            <h6>TOTAL DE CLIENTES</h6>
                            <div class="main-total-clientes">
                                <h1><label for="totalCli"><?=$total_clientes[0];?></label></h1>
                                <div class="icone-total">
                                    <i class="fa-solid fa-users fa-xl"></i>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <?php 
                if (isset($_GET['filtrar'])){
                    $nome = $_GET['nomeCli'] ?? '';
                    $cpf = $_GET['cpfCli'] ?? '';
                    $telefone = $_GET['telefoneCli'] ?? '';

                    $stmt = "SELECT * FROM clientes WHERE id_empresa = :id_empresa";
                    $params = [':id_empresa' => $id_empresa];

                    if (!empty($nome)) {
                        $stmt .= " AND nome LIKE :nome COLLATE utf8mb4_general_ci";
                        $params[':nome'] = "%$nome%";
                    }

                    if (!empty($cpf)) {
                        $stmt .= " AND cpf LIKE :cpf COLLATE utf8mb4_general_ci";
                        $params[':cpf'] = "%$cpf%";
                    }

                    if (!empty($telefone)) {
                        $stmt .= " AND telefone LIKE :telefone COLLATE utf8mb4_general_ci";
                        $params[':telefone'] = "%$telefone%";
                    }

                    $query= $pdo ->prepare($stmt);
                    $query ->execute($params);
                    $clientes  = $query ->fetchAll(PDO::FETCH_ASSOC);
                }
                else{
                    $query= $pdo ->prepare("SELECT * FROM clientes WHERE id_empresa = :id_empresa ORDER BY nome ASC");
                    $query ->bindParam(':id_empresa', $id_empresa, PDO::PARAM_INT);
                    $query ->execute();
                    $clientes  = $query ->fetchAll(PDO::FETCH_ASSOC);
                }
                if (count($clientes) == 0):
                ?>
                <div class='sem-cliente'>
                    <i class="fa-solid fa-users fa-2xl"></i>
                    <h2>Nenhum Cliente Cadastrado</h2>
                    <small>Adicione seu primeiro Cliente</small>
                </div>
                <?php
                else:
                ?>
                    <!-- start tableCli  -->
                    <div class="table-responsive mt-4">
                            <table class="table table-striped table-hover">
                            <thead>
                                <tr class="text-align-center text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Email</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php foreach($clientes as $row): ?> 
                                    <tr class="text-center text-align-center">
                                        <input type='hidden' id='idCliente' value=<?= $row['id']?>/>
                                        <td scope ='row'><label for='idCli'><?= $row['id'] ?></label></td>
                                        <td scope ='row'><label for='nomeCli'><?= $row['nome']." ". $row['sobrenome'] ?></label></td>
                                        <td><label for='contatoCli'><?= $row['celular'] ?></label></td>
                                        <td><label for='emailCli'><?= $row['email'] ?></label></td>
                                        <td><label for='cpfCli'><?= $row['cpf'] ?></label></td>
                                        <td><label for='enderecoCli'><?= $row['rua'] .", Nº ". $row['nCasa'] ?></label></td>
                                        <td class='icons-item'>
                                            <a id='openPopUpEditar' class=".$row['id']." href='#'><i  class='fa-solid fa-pen-to-square first'></i></a>
                                            <a id='openPopUpExcluir'href='#'><i class='fa-solid fa-trash second'></i></a>
                                            <a id='openPopUpInfo'href='#'><i class='fa-solid fa-circle-info third'></i></a>
                                        </td>
                                    </tr>
                            </tbody>
                            <?php endforeach;?>
                            <tfoot>
                                <tr class="ms-2">
                                    <td colspan="8" class="fw-lighter fs-3"><strong>LISTANDO 1/6</strong></td>
                                </tr>
                            </tfoot>
                        </table>               
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../components/sidebar.js"></script>
    <script src="../src/consultaCep.js"></script>
    <script src="../src/consultaRG.js"></script>
    <script src="../src/consultaCPF.js"></script>
    <script src="../src/consultaCNPJ.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script>
        $('#modalCadastro').on('shown.bs.modal', function () {
        $('#nomeCli').focus();
        });
    </script>
    
</div>
</body>
</html>