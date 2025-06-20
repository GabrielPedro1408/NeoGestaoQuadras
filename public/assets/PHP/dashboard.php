<?php
    session_start();
    // Verifica se foi efetuado o login
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=Você precisa fazer login para acessar esta página.");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <script type="module" src="../components/sidebar.js"></script>
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
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
                    <h1>SEJA BEM VINDO <strong>NOME DO USUÁRIO</strong></h1>
                </div>
                <!-- conteúdo da esquerda -->
                 <div class="tudo">
                    <div class="tudo-esquerda">
                        <section class="contas">
                            <div class="conta-diaria">
                                <div class="conta-diaria-title item-variavel">
                                    <h3>Contas Variáveis Diária</h3>
                                </div>
                                <div class="conta-diaria-esquerda item-variavel">
                                    <div class="conta-diaria-subtitle-esquerda">
                                        <h4>Contas a Receber</h4>
                                    </div>
                                    <div class="container-fluids">
                                        <div class="cards">
                                            <div class="cards-headers">
                                                <div class="cards-top">
                                                    <div class="card-number">
                                                        <div class="card-valor">
                                                            <p class="valor">R$ </p><label for="valor-vendas-dia">1890,00</label>
                                                        </div>
                                                        <div class="days">
                                                            <p>Faturamento de Hoje</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                </div>
                                                <div class="card-type">
                                                    <p class="quantidade">Venda(s) Feita(s) no Dia - </p> <label for="quant-vendas-dia">12</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-group item-variavel">
                                            <a class="bottom-text" href="#">Ir Para Todas Contas a Receber</a>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cópia do card -->
                            <div class="conta-diaria direita">
                                <div class="conta-diaria-esquerda item-variavel">
                                    <div class="conta-diaria-subtitle-esquerda">
                                        <h4>Contas a Pagar</h4>
                                    </div>
                                    <div class="container-fluids">
                                        <div class="cards">
                                            <div class="cards-headers">
                                                <div class="cards-top">
                                                    <div class="card-number">
                                                        <div class="card-valor">
                                                            <p class="valor">R$ </p><label for="valor-vendas-dia">789,00</label>
                                                        </div>
                                                        <div class="days">
                                                            <p>Contas de Hoje</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-bag-shopping"></i>
                                                    </div>
                                                </div>
                                                <div class="card-type">
                                                    <p class="quantidade">Conta(s) a Pagar no Dia - </p> <label for="quant-vendas-dia">12</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-group item-variavel">
                                            <a class="bottom-text" href="#">Ir Para Todas Contas a Pagar</a>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="agenda">
                            <div class="horarios">
                                <div class="top-group">
                                    <div class="title">
                                        <h3>Agenda de Hoje</h3>
                                    </div>
                                    <div class="button-agenda">
                                        <button href="#">Exibir Agenda Completa <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="content-agenda">
                                <?php
                                    // foreach($result as $linha){
                                    echo
                                        "<div class='title-agenda'>
                                            <label for='title-agenda'> Quadra 1</label>
                                        </div>";
                                    // }
                                        echo("<div class='group-agenda'>");
                                            // foreach($resultHorarios as $horarios){
                                                echo("
                                                <div class='horario'>
                                                    <label for='horario-agenda'>9:00</label>
                                                <label>às</label>
                                                    <label for='horario-agenda'>10:00</label>
                                                </div>
                                                ");
                                            // }
                                        echo("</div>");
                                ?>
                                
                                </div>
                            </div>
                        </section>
                        </div>
                        <!-- end conteúdo da esquerda -->

                        <!-- conteúdo da direita -->
                        <div class="tudo-direita">
                            <section class="contas-fixas">
                                <div class="container-contas">
                                    <div class="title-fixo">
                                        <h3>Contas fixas Mensais</h3>
                                    </div>
                                    <div class="main-content">
                                        <div class="content-title">
                                            <h4>Descrição da Conta</h4>
                                            <span><h4>Valor da Conta</h4></span>
                                            <h4>Ações</h4>
                                        </div>
                                        <div class="content-item">
                                            <?php 
                                            /*foreach($nomeConta as $nome)*/ {
                                                echo("<div class='nome-item'>
                                                    <label for='nomeConta'>Funcionario Estavan</label>
                                                    </div>
                                                ");
                                            }
                                            echo('<div class="valor-item">');
                                            /*foreach($valorConta as $valor)*/ {
                                                echo("<label for='valorConta'>R$ 1518,00</label>");
                                            }
                                            echo('</div>');
                                            ?>
                                            <div class="icons-item">
                                                <a href="#"><i class="fa-solid fa-pen-to-square first"></i></a>
                                                <a href="#"><i class="fa-solid fa-trash second"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-info third"></i></a>
                                            </div>
                                        </div>
                                        <div class="bottom-group-bts">
                                            <div class="bt-exibir">
                                                <button>Exibir todos os Gastos</button>
                                            </div> 
                                            <div class="bt-novo-gasto">
                                                <button>Novo Gasto</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                <!-- end conteúdo da direita -->
                </div>
            </main>
        </div>
    </div>
    <!-- end main -->

    <!-- start footer -->
    
    <!-- end footer -->
</body>
</html>