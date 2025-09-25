<?php
session_start();

include_once __DIR__ . '../../src/buscarIdEmpresa.php';

include_once 'conexao.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php?error=Você precisa fazer login para acessar esta página.');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
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
    <title>Neo Gestão</title>
</head>

<body>
    <div class="full-content">
        <?php require '../components/sidebar.php'; ?>
        <div id="main-content">
            <header><?php require '../components/header.php'; ?> </header>
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

                $queryClientes = $pdo->prepare(
                    "SELECT
                    count(*) AS total_clientes
                    FROM
                    clientes
                    WHERE
                    id_empresa = :id_empresa
                    "
                );

                $queryClientes->bindParam(':id_empresa', $id_empresa, PDO::PARAM_INT);
                $queryClientes->execute();
                $resultClientes = $queryClientes->fetchAll(PDO::FETCH_ASSOC);
                $total_clientes = [];
                foreach ($resultClientes as $cliente) {
                    $total_clientes[] = $cliente['total_clientes'];
                }

                ?>
                <div class="container">
                    <section class="top-area">
                        <div class="titulo">
                            <h3><strong>GERENCIAMENTO DE CLIENTES</strong></h3>
                        </div>
                        <div class="adicionar">
                            <button id='openPopUpCadastro' class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalCadastro">+ Novo Cliente</button>
                        </div>
                    </section>
                    <div class="mid-area">
                        <div class="pesquisar">
                            <h6>BUSCAR</h6>
                            <div class="main-pesquisar">
                                <form action="" method="post">
                                    <div class="group">
                                        <input type="text" name="nomeCli" id="nomeCli" placeholder="Nome">
                                    </div>
                                    <div class="group">
                                        <input type="text" name="cpfCli" id="nomeCli" placeholder="CPF">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="total-clientes">
                            <div class="grupo">
                                <h6>TOTAL DE CLIENTES</h6>
                                <div class="main-total-clientes">
                                    <h1><label for="totalCli"><?= $total_clientes[0]; ?></label></h1>
                                    <div class="icone-total">
                                        <i class="fa-solid fa-users fa-xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- start table Clientes  -->
                    <div class="table-clientes">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nome Cliente</th>
                                    <th scope="col">Contato</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <?php
                            //Start search clients
                            try {
                                $buscarClientes = $pdo->prepare(
                                    "SELECT
                                    id_empresa,
                                    id, 
                                    nome, 
                                    sobrenome, 
                                    celular, 
                                    email, 
                                    cpf, 
                                    rua, 
                                    nCasa
                                    FROM clientes
                                    WHERE
                                    id_empresa = :id_empresa 
                                    LIMIT 10
                                "
                                );

                                $buscarClientes->execute(array(
                                    ':id_empresa' => $id_empresa
                                ));

                                $clientes = $buscarClientes->fetchAll(PDO::FETCH_ASSOC);
                            } catch (PDOException $e) {
                                echo "Erro na busca de clientes: " . $e->getMessage();
                            }
                            ?>
                            <tbody>
                                <?php
                                foreach ($clientes as $cliente):
                                    ?>
                                    <tr>
                                        <td><label>
                                                <?= empty($cliente['nome']) ? '<span>Vazio</span>' :
                                                    $cliente['nome'] . " " . $cliente['sobrenome'] ?>
                                            </label></td>

                                        <td><label>
                                                <?= empty($cliente['celular']) ? '<span>Vazio</span>' :
                                                    $cliente['celular'] ?>
                                            </label></td>

                                        <td><label>
                                                <?= empty($cliente['email']) ? '<span>Vazio</span>' :
                                                    $cliente['email'] ?>
                                            </label></td>

                                        <td><label>
                                                <?= empty($cliente['cpf']) ? '<span>Vazio</span>' :
                                                    $cliente['cpf'] ?>
                                            </label></td>

                                        <td><label>
                                                <?= empty($cliente['rua']) ? '<span>Vazio</span>' :
                                                    $cliente['rua'] . ", Nº " . $cliente['nCasa'] ?>
                                            </label></td>

                                        <td class='icons-item'>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditar"
                                                data-id="<?= $cliente['id']; ?>">
                                                <i class='fa-solid fa-pen-to-square first'></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalExcluir"
                                                data-id="<?= $cliente['id']; ?>">
                                                <i class='fa-solid fa-trash second'></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalInfo"
                                                data-id="<?= $cliente['id']; ?>">
                                                <i class='fa-solid fa-circle-info third'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach
                                ?>
                                <!-- End search clients -->
                            </tbody>
                        </table>
                        <div class="footer-table">
                            <div class='esquerda'>
                                <h3>Listando</h3>
                                <div class='labels'><label for='paginaAtual'>1</label>
                                    <p>/</p> <label for='totalPaginas'>7</label>
                                </div>
                            </div>
                            <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label
                                    for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./modalCliente/CRUD/updateCliente.js"></script>
    <script src="./modalCliente/CRUD/deleteCliente.js"></script>
    <script src="./modalCliente/CRUD/infoCliente.js"></script>
    <script src="../components/sidebar.js"></script>
    <script src="../src/consultaCep.js"></script>
    <script src="../src/consultaRG.js"></script>
    <script src="../src/consultaCPF.js"></script>
    <script src="../src/consultaCNPJ.js"></script>
    <script src="../src/consultaCel.js"></script>
    <script src="../src/consultaEmail.js"></script>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script>
        $('#modalCadastro').on('shown.bs.modal', function () {
            $('#nomeCli').focus();
        });
    </script>
    </div>
</body>

</html>