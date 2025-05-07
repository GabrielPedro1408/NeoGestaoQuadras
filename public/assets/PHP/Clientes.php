<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/bootstrap.bundle.min.js"></script>
    <title>NPL Quadras</title>

</head>
<body>
    
    <?php
        require '../components/sidebar.php';
        require '../components/header.php' ;
    ?>

    <!-- start main -->
<div id="main-content">
    <main>
        <!-- start principal -->
        <div class="container">
            <div class="titulo">
                <h1><strong>Clientes</strong></h1>
            </div>
            <!-- start "table"  -->
            <div id="top-area">
                 <!-- start adicionarCli  -->
                <div class="adicionar">
                    <button type="button">+Adicionar</button><!-- colocar um pop-up aqui-->
                </div>
                <!-- start Pesquisar  -->
                <div class="pesquisar">
                    <button href="#">Buscar : <i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <!-- start tableCli  -->
                <table class="table table-striped-column">
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
                                    <td scope ='row'><label for='nomeCli'>Bosta</label></dh>
                                    <td><label for='contatoCli'>bosta</label></td>
                                    <td><label for='emailCli'>merda</label></td>
                                    <td><label for='cpfCli'>bosta</label></td>
                                    <td><label for='enderecoCli'>espeto</label></td>
                                    <td>
                                        <a href='#'><i class='fa-solid fa-pen-to-square first'></i></a>
                                        <a href='#'><i class='fa-solid fa-trash second'></i></a>
                                        <a href='#'><i class='fa-solid fa-circle-info third'></i></a>
                                    </td>";
                                // }
                                ?>
                            </tbody>
                            </table>
                <!-- end tableCli  -->     
            </div>
            

        </div>
        <!-- end principal -->
    </main>
    </div>
    <!-- end main -->
    
    <!-- start footer -->
    <footer>

    </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>