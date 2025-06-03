<?php 
session_start();
include_once 'conexao.php';
if($_SERVER ['REQUEST_METHOD'] === "POST"){
    include_once './modalCliente/CRUD/createCliente.php';
}
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/clientes.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/PopUpBuscar.js"></script>
    <script type="module" src="../JS/PopUpCadastro.js"></script>
    <script type="module" src="../JS/PopUpEditar.js"></script>
    <script type="module" src="../JS/PopUpExcluir.js"></script>
    <script type="module" src="../JS/PopUpInfo.js"></script>
    <title>NPL Quadras</title>

</head>
<body>

    <?php
        
        require '../components/sidebar.php';
        require '../components/header.php' ; 
    ?>
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
    <!-- buscar cli -->
    
    <!-- editar cli -->
    
<!-- PopUps -->

    <div id="main-content">
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
            ?>
            <div class="container">
                <div class="titulo">
                    <h1><strong>Clientes</strong></h1>
                </div>
            </div>

                <div class="container-fluids">
                <section class="top-area">
                    <div class="adicionar">
                        <button id='openPopUpCadastro' type="button">+ Novo Cliente</button>
                    </div>

                    <div class="pesquisar">
                        <button id='openPopUpBuscar'>Buscar : <i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </section>
                <?php 
                try {
                    $stmt = $pdo->query("SELECT nome, celular, email, cpf, rua, nCasa FROM clientes");
                    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch ( PDOException $e) {
                    echo 'erro ao buscar clientes' . $e -> getMessage();
                }
                
                ?>
                    <!-- start tableCli  -->
                    <div class="table-clientes">
                        <table class="table table-hover">
                            <thead>
                                <tr>
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
                            <?php
                                //Start search clients 
                                $username = "Vitor";
                                $id_empresa = buscarIdEmpresa($username);
                                $buscarClientes = $pdo->prepare("SELECT id, nome, sobrenome, celular, email, cpf, rua, nCasa
                                FROM clientes WHERE id_empresa = :id_empresa LIMIT 10"); 
                                $buscarClientes->execute(array(
                                    ':id_empresa' => $id_empresa
                                ));
                                $result = $buscarClientes->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <?php
                                foreach($result as $row):
                            ?>
                                    <tr>
                                        <input type='hidden' id='idCliente' value=<?= $row['id']?> />
                                        <td scope ='row'><label for='idCli'><?= $row['id'] ?></label></td>
                                        <td scope ='row'><label for='nomeCli'><?= $row['nome']." ". $row['sobrenome'] ?></label></td>
                                        <td><label for='contatoCli'><?= $row['celular'] ?></label></td>
                                        <td><label for='emailCli'><?= $row['email'] ?></label></td>
                                        <td><label for='cpfCli'><?= $row['cpf'] ?></label></td>
                                        <td><label for='enderecoCli'><?= "Rua ". $row['rua'] .", nº". $row['nCasa'] ?></label></td>
                                        <td class='icons-item'>
                                            <a id='openPopUpEditar' class='".$row['id']."' href='#'><i  class='fa-solid fa-pen-to-square first'></i></a>
                                            <a id='openPopUpExcluir'href='#'><i class='fa-solid fa-trash second'></i></a>
                                            <a id='openPopUpInfo'href='#'><i class='fa-solid fa-circle-info third'></i></a>
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

                                <div class='labels'><label for='paginaAtual'>1</label> <p>/</p> <label for='totalPaginas'>7</label></div></div>
                                <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a></div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script  src="../JS/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>