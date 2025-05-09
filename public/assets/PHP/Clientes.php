<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/clientes.css">
    <link rel="stylesheet" href="../CSS/PopUpEditar.css">
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
     <!-- cadastro cli -->
    
        <div class="modal" id="modalCadastro">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Cadastro de Cliente</h3>
                    <a href="#" id="closePopUpCadastro" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nomeCli">
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenomeCli">
                </div>
                <div class="col-md-4">
                    <label for="dataNascCli" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascCli">
                </div>
                <div class="col-md-4">
                    <label for="cpfCli" class="form-label">CPF</label>
                    <input type="int" class="form-control" id="cpfCli">
                </div>
                <div class="col-md-4">
                    <label for="rgCli" class="form-label">RG (Registro Geral)</label>
                    <input type="int" class="form-control" id="rgCli">
                </div>
                <div class="col-md-6">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="int" class="form-control" id="cepCli">
                </div>
                <div class="col-md-6">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli">
                </div>
                <div class="col-md-6">
                    <label for="ruaCli" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="ruaCli">
                </div>
                <div class="col-md-3">
                    <label for="estadoCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoCli">
                </div>
                <div class="col-md-3">
                    <label for="casaCli" class="form-label">Nº Da Residência</label>
                    <input type="int" class="form-control" id="casaCli">
                </div>
                <div class="col-md-6">
                    <label for="contatoCli" class="form-label">Contato</label>
                    <input type="int" class="form-control" id="contatoCli">
                </div>
                <div class="col-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="text" value="" class="form-control" id="emailCli">
                </div>
                <div class="col-md-12">
                    <label for="descCli" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="descCli">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
                </div>
                </form>
            </div>
        </div> 

    <!-- buscar cli -->
    <div class="modal" id="modalBuscar">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Informações do Cliente</h3>
                    <a href="#" id="closePopUpBuscar" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nomeCli">
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenomeCli">
                </div>
                <div class="col-md-4">
                    <label for="dataNascCli" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascCli">
                </div>
                <div class="col-md-4">
                    <label for="cpfCli" class="form-label">CPF</label>
                    <input type="int" class="form-control" id="cpfCli">
                </div>
                <div class="col-md-4">
                    <label for="rgCli" class="form-label">RG (Registro Geral)</label>
                    <input type="int" class="form-control" id="rgCli">
                </div>
                <div class="col-md-6">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="int" class="form-control" id="cepCli">
                </div>
                <div class="col-md-6">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli">
                </div>
                <div class="col-md-6">
                    <label for="ruaCli" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="ruaCli">
                </div>
                <div class="col-md-3">
                    <label for="estadoCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoCli">
                </div>
                <div class="col-md-3">
                    <label for="casaCli" class="form-label">Nº Da Residência</label>
                    <input type="int" class="form-control" id="casaCli">
                </div>
                <div class="col-md-6">
                    <label for="contatoCli" class="form-label">Contato</label>
                    <input type="int" class="form-control" id="contatoCli">
                </div>
                <div class="col-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="text" value="" class="form-control" id="emailCli">
                </div>
                <div class="col-md-12">
                    <label for="descCli" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="zdescCli">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar Cliente</button>
                </div>
                </form>
            </div>
        </div> 

    <!-- editar cli -->


    <div class="modal" id="modalEditar">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Edição das Informações</h3>
                    <a href="#" id="closePopUpEditar" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nomeCli">
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenomeCli">
                </div>
                <div class="col-md-4">
                    <label for="dataNascCli" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascCli">
                </div>
                <div class="col-md-4">
                    <label for="cpfCli" class="form-label">CPF</label>
                    <input type="int" class="form-control" id="cpfCli">
                </div>
                <div class="col-md-4">
                    <label for="rgCli" class="form-label">RG (Registro Geral)</label>
                    <input type="int" class="form-control" id="rgCli">
                </div>
                <div class="col-md-6">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="int" class="form-control" id="cepCli">
                </div>
                <div class="col-md-6">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli">
                </div>
                <div class="col-md-6">
                    <label for="ruaCli" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="ruaCli">
                </div>
                <div class="col-md-3">
                    <label for="estadoCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoCli">
                </div>
                <div class="col-md-3">
                    <label for="casaCli" class="form-label">Nº Da Residência</label>
                    <input type="int" class="form-control" id="casaCli">
                </div>
                <div class="col-md-6">
                    <label for="contatoCli" class="form-label">Contato</label>
                    <input type="int" class="form-control" id="contatoCli">
                </div>
                <div class="col-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="text" value="" class="form-control" id="emailCli">
                </div>
                <div class="col-md-12">
                    <label for="descCli" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="descCli">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Confirmar Edição</button>
                </div>
                </form>
            </div>
        </div>



        <div class="modal excluir" id="modalExcluir">
            <div class="modal-inner">
                <div class="top-pop-up-excluir">
                    <h3>Deseja realmente excluir esse cadastro? </h3>
                    <a href="#" id="closePopUpExcluir" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" value="bosta" class="form-control" id="nomeCli" disabled>
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" value="pietrinho" class="form-control" id="sobrenomeCli" disabled>
                </div>
                <div class="buttons">
                    <button type="submit" id="excluirCli" class="deletar">Excluir</button>
                    <button id="closePopUpExcluir" class="bt-cancelar" >Cancelar</button>
                </div>
                </form>
            </div>
        </div>

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