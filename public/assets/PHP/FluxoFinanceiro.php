<?php
    include_once 'conexao.php';
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
    <link rel="stylesheet" href="../CSS/fluxoFinanceiro.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <title>NPL Quadras</title>
</head>
<body>
    <div class="full-content">
        <?php require '../components/sidebar.php';?> 
        <div id="main-content">
            <header><?php require '../components/header.php';?> </header> 
            <?php /* include_once './modalFinanceiro/fluxoFinanceiro/CRUD/createFluxo.php'; */?>
            <div class="container">
                <section class="top-area d-flex justify-content-between align-items-center">
                        <div class="titulo">
                            <h3><strong>CONTROLE DE FLUXO FINANCEIRO</strong></h3>
                        </div>
                        <div class="adicionar gap-4 d-flex">
                            <button id='openPopUpCadastroTransacao' type="button" data-bs-toggle="modal" data-bs-target="#modalCadastroTransacao">+Adicionar Transação</button>
                        </div>
                </section>
                <div class="mid-area">
                    <div class="total primeiro">
                        <div class="grupo">
                            <h6>ENTRADA</h6>
                            <div class="main-total">
                                <h1><label for="totalContasPagar">R$ 300,00</label></h1>
                                <div class="icone entrada">
                                    <i class="fas fa-arrow-up "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total segundo">
                        <div class="grupo">
                            <h6>SAÍDA</h6>
                            <div class="main-total">
                                <h1><label for="totalContasReceber">R$ 100,00</label></h1>
                                <div class="icone saida">
                                    <i class="fas fa-arrow-down "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total terceiro">
                        <div class="grupo">
                            <h6>SALDO</h6>
                            <div class="main-total">
                                <h1><label for="totalContasReceber">R$ 200,00</label></h1>
                                <div class="icone saldo">
                                    <i class="fas fa-wallet"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filters-section">
                    <h2><i class="fas fa-filter"></i> Filtros</h2>
                            <form action="" method="POST">
                                <div class="filters mt-3">   
                                    <input type="text" name="filtro_descricao" id="filtro_descricao" placeholder="Buscar por Descrição">
                                    <select name="filtro_categoria" id="filtro_categoria">
                                        <option disabled selected>Categoria</option>
                                        <option value="entrada">Entrada</option>
                                        <option value="saida">Saída</option>
                                    </select>
                                    <select name="tipo_categoria" id="tipo_categoria">
                                        <option disabled selected>Tipo</option>
                                        <option value="receita">Venda</option>
                                        <option value="despesa">Serviço</option>
                                        <option value="despesa">Garantia</option>
                                        <option value="despesa">Troca</option>
                                    </select>
                                    <input type="date" name="filtro_data" id="filtro_data" placeholder="Data"> 
                                    <button type="submit" class="btn">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="text-align-center text-center">
                                        <th>Descrição</th>
                                        <th>Categoria</th>
                                        <th>Tipo</th>
                                        <th>Data</th>
                                        <th>Valor</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-align-center">
                                        <td>Exemplo de Descrição</td>
                                        <td>Entrada</td>
                                        <td>Venda</td>
                                        <td>2023-10-01</td>
                                        <td>R$ 100,00</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm">Editar</button>
                                            <button class="btn btn-danger btn-sm">Excluir</button>
                                        </td>
                                    </tr>
                                    <tr class="text-center text-align-center">
                                        <td>Exemplo de Descrição</td>
                                        <td>Entrada</td>
                                        <td>Venda</td>
                                        <td>2023-10-01</td>
                                        <td>R$ 100,00</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm">Editar</button>
                                            <button class="btn btn-danger btn-sm">Excluir</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../components/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>