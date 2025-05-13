<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/quadras.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/bootstrap.bundle.min.js"></script>
    <title>NPL Quadras</title>

</head>
<body>
    <?php  
        require '../components/sidebar.php';
        require '../components/header.php';
    ?>

    <!-- start main -->
    <div id="main-content">
        <div class="container">
            <main>
                <div class="titulo">
                    <h1>Cadastro de Quadras</h1>
                </div>
        <!-- start top page -->
        <div class="top-page">
            <div class="bts">
                <button type="submit"href="#">+Nova quadra</button>
                <input type="text" name="buscar" id="buscar"placeholder="Buscar:"<i class="fa-solid fa-magnifying-glass"></i>>
            </div>
            
                 
            
            <section class="table">
                <!-- start tableQuadras  -->
                    <div class="table-quadra">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Disponibilidade</th>
                                <th scope="col">Modalidade</th>
                                <th scope="col">Valor Hora</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>                                    
                            <?php
                                echo"
                                <td scope ='row'><label for='nomeQuadra'>Quadra Basquete</label></dh>
                                <td><label for='disponibilidadeQua'>Disponivel</label></td>
                                <td><label for='modalidadeQua'>Basquete</label></td>
                                <td><label for='valorHora'>140R$</label></td>
                                <td class='icons-item'>
                                    <a id='openPopUpEditar' href='#'><i  class='fa-solid fa-pen-to-square first'></i></a>
                                    <a id='openPopUpExcluir'href='#'><i class='fa-solid fa-trash second'></i></a>
                                    <a id='openPopUpInfo'href='#'><i class='fa-solid fa-circle-info third'></i></a>
                                </td>";
                            ?>
                            </tbody>
                        </table>
                        <div class="footer-table">
                            <div class='esquerda'>
                                <h3>Listando</h3>
                            <?php 
                                echo"
                                <div class='labels'><label for='paginaAtual'>1</label> <p>/</p> <label for='totalPaginas'>7</label></div></div>
                                <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a></div>
                                ";
                            ?>
                        </div>
            </section>
    </div>
            <!-- end top page -->

           
    </main>
    <!-- end main -->
</body>
</html>