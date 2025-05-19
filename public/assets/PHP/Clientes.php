<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/clientes.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/bootstrap.bundle.min.js"></script>
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
                    <!-- start tableCli  -->
                    <div class="table-clientes">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Email</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            // foreach ($clientes as $cliente) {
                                echo"
                                <td scope ='row'><label for='nomeCli'>Espeto Pietro da Santa Silva</label></dh>
                                <td><label for='contatoCli'>(011) 90000-0000</label></td>
                                <td><label for='emailCli'>bosta123@gmail.com</label></td>
                                <td><label for='cpfCli'>40090080023</label></td>
                                <td><label for='enderecoCli'>bangalo do espeto</label></td>
                                <td class='icons-item'>
                                    <a id='openPopUpEditar' href='#'><i  class='fa-solid fa-pen-to-square first'></i></a>
                                    <a id='openPopUpExcluir'href='#'><i class='fa-solid fa-trash second'></i></a>
                                    <a id='openPopUpInfo'href='#'><i class='fa-solid fa-circle-info third'></i></a>
                                </td>";
                            // }
                            ?>
                            </tbody>
                        </table>
                        <div class="footer-table">
                            <div class='esquerda'>
                                <h3>Listando</h3>
                            <?php
                            // foreach($pages as $page){
                                echo"
                                <div class='labels'><label for='paginaAtual'>1</label> <p>/</p> <label for='totalPaginas'>7</label></div></div>
                                <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a></div>
                                ";
                            // }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>