<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php?error=Você precisa fazer login para acessar esta página.');
    exit();
}
include_once 'conexao.php';
include_once './modalAgendamento/CRUD/createAgendamento.php';

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/agendamentos.css">
    <link rel="stylesheet" href="../components/header.css">
    <link rel="stylesheet" href="../components/sidebar.css">
    <link rel="stylesheet" href="../CSS/PopUp.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/PopUpBuscar.js"></script>
    <script type="module" src="../JS/PopUpCadastro.js"></script>
    <script type="module" src="../JS/PopUpEditar.js"></script>
    <script type="module" src="../JS/PopUpExcluir.js"></script>
    <script type="module" src="../JS/PopUpInfo.js"></script>

    <title>Neo Gestão</title>
</head>
<body>
<div class="full-content">
    <?php include '../components/sidebar.php';?>
    <div id="main-content">
    <header><?php require '../components/header.php';?> </header> 

    <!-- start main -->
    <!-- PopUps -->
        <!-- cadastrar cli/modalClienteente -->
        <?php include_once "./modalAgendamento/cadastroAgend.php"; ?>
        <!-- buscar cliente -->
        <?php include_once "./modalAgendamento/buscarAgend.php"; ?>
            <!-- editar cliente -->
        <?php include_once "./modalAgendamento/editarAgend.php"; ?>
            <!-- excluir cliente -->
        <?php include_once "./modalAgendamento/excluirAgend.php"; ?>
            <!-- iformação cliente -->
        <?php include_once "./modalAgendamento/infoAgend.php"; ?>
    <!-- buscar cli -->
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
            ?>
            <?php
            $query = $pdo ->prepare(
                "SELECT
                count(*) AS total_agendamentos
                FROM
                agendamentos"
            );
            $query -> execute();
            $resultAgendamentos = $query -> fetchAll(PDO::FETCH_ASSOC);

            $totalAgendamentos = [];
            foreach($resultAgendamentos as $agendamento){
                $totalAgendamentos[] = $agendamento['total_agendamentos'];
            }

            ?>
            <div class="container">
                <section class="top-area">
                    <div class="titulo">
                        <h3><strong>GERENCIAMENTO DE AGENDAMENTOS</strong></h3>
                    </div>
                    <div class="adicionar">
                        <button id='openPopUpCadastro' class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalCadastro">+ Novo Agendamento</button>
                    </div>
                </section>   
                    <div class="mid-area">
                        <div class="pesquisar">
                            <h6>BUSCAR</h6>
                            <div class="main-pesquisar">
                                <form action="" method="post">
                                    <div class="group">
                                        <input type="text"  name="nomeCli" id="nomeCli" placeholder="Nome">
                                    </div>
                                    <div class="group">
                                        <input type="date" name="diaAgend" id="diaAgend" placeholder="Dia">
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="total-agendamentos">
                        <h6>TOTAL DE AGENDAMENTOS</h6>
                        <div class="main-total-agendamentos">
                            <i class="fa-solid fa-calendar fa-xl"></i>
                            <h3><label for="totalAgend"><?=$totalAgendamentos[0]?></label></h3>
                        </div>
                    </div>
                </div>
                    <!-- start tableCli  -->
                    <div class="table-clientes">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Nome Cliente</th>
                                <th scope="col">Quadra</th>
                                <th scope="col">Data</th>
                                <th scope="col">Horário Início</th>
                                <th scope="col">Horário de Termino</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Estado da Conta</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <?php 
                            try {
                                $stmt = $pdo->query("
                                SELECT
                                    ag.id,
                                    cli.nome AS nome_cliente,
                                    q.descr AS quadras,
                                    ag.dt,
                                    ag.horario_agendado,
                                    ag.tempo_alocado,
                                    ag.valor,
                                    ag.estado_conta
                                        FROM agendamentos ag
                                        JOIN clientes cli ON ag.id_cliente = cli.id
                                        JOIN quadras q ON ag.id_quadra = q.id
                                ");
                                $agendamentos= $stmt->fetchAll(PDO::FETCH_ASSOC);
                            } catch ( PDOException $e) {
                                echo 'erro ao buscar clientes' . $e -> getMessage();
                            }
                            
                            ?>
                            <tbody>                                    
                            <?php
                             foreach ($agendamentos as $agendamento):
                            ?>
                            <tr>
                                <td><label>
                                <?=empty($agendamento['nome_cliente']) ? '<span>Vazio</span>' :
                                $agendamento['nome_cliente']?>
                                </label></td>

                                <td><label> 
                                <?=empty($agendamento['quadra']) ? '<span>Vazio</span>' :
                                $agendamento['quadra']?>  
                                </label></td>

                                <td><label>
                                <?=empty($agendamento['dt']) ? '<span>Vazio</span>' :
                                $agendamento['dt']?>
                                </label></td>

                                <td><label> 
                               <?=empty($agendamento['horario_agendado']) ? '<span>Vazio</span>' :
                                $agendamento['horario_agendado']?>
                                </label></td>

                                <td><label>
                                <?=empty($agendamento['tempo_alocado']) ? '<span>Vazio</span>' :
                                $agendamento['tempo_alocado']?>
                                </label></td>

                                <td><label>
                                <?=empty($agendamento['valor']) ? '<span>Vazio</span>' :
                                $agendamento['valor']?>
                                </label></td>
                                
                                <td><label>
                                <?=empty($agendamento['estado_conta']) ? '<span>Vazio</span>' :
                                $agendamento['estado_conta']?>
                                </label></td>

                               <td class='icons-item'>
                                    <a href="?editar=<?= $agendamento['id'] ?>"><i class="fa-solid fa-pen-to-square first"></i></a>
                                    <a id='openPopUpExcluir' href="?excluir=<?= $agendamento['id'] ?>"><i class='fa-solid fa-trash second'></i></a>
                                    <a id='openPopUpInfo' href="?info=<?= $agendamento['id'] ?>"><i class='fa-solid fa-circle-info third'></i></a>
                                </td>
                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </table>
                        <div class="footer-table">
                            <div class='esquerda'>
                                <h3>Listando</h3>
                            <?php 
                            // foreach($pages as $page):
                            ?>
                                
                                <div class='labels'><label for='paginaAtual'>1</label> <p>/</p> <label for='totalPaginas'>7</label></div></div>
                                <div class='direita'><a href='#'><i class='fa-solid fa-arrow-left'></i></a> <label for='paginaAtual'>1</label> <a href='#'><i class='fa-solid fa-arrow-right'></i></a></div>
                                
                            
                            <?php 
                            // endforeach 
                            ?>
                            <?php if (isset($_GET['editar'])): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('modalEditar');
  if (modal) {
    modal.addEventListener('hidden.bs.modal', function () {
      if (window.location.search.includes('editar=')) {
        // Remove o parâmetro editar da URL sem recarregar a página
        const url = new URL(window.location);
        url.searchParams.delete('editar');
        window.history.replaceState({}, document.title, url.pathname + url.search);
      }
    });
    // Abre o modal automaticamente
    var bsModal = new bootstrap.Modal(modal);
    bsModal.show();
  }
});
</script>
<?php endif; ?>
                        </div>
                    </div>     
                </div>
            </div>
        </main>
    </div>
</div>
</div>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <script src="../components/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>