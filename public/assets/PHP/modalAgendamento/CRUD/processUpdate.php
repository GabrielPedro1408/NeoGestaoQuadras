<?php
include_once __DIR__ . '/../../conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_agendamento = $_POST['id_agendamento'];

    try {
        //Pega o id da nova quadra
        $idNovaQuadra = $_POST['quadra_edit']; //O value do select ja tras o id

        //Pega o restante dos dados
        $dateAgend = $_POST['data_agendamento_edit'];
        $horarioAgend = $_POST['horario_agend_edit'];
        $horarioFimAgend = $_POST['horario_fim_agend_edit'];
        $valorAgend = $_POST['valor_agend_edit'];
        $estadoContaAgend = $_POST['estado_cont_agend_edit'];

        //Prepara a query MySQL para alterar os registros no banco
        $alteraAgend = $pdo->prepare('UPDATE agendamentos
        SET id_quadra = :id_quadra, dt = :dt, horario_agendado = :horario_agendado, tempo_alocado = :tempo_alocado, valor = :valor, estado_conta = :estado_conta
        WHERE id = :id_agendamento
        ');

        //Executa a query passando os valores necessários
        $result = $alteraAgend->execute(array(
            ':id_quadra' => $idNovaQuadra,
            ':dt' => $dateAgend,
            ':horario_agendado' => $horarioAgend,
            ':tempo_alocado' => $horarioFimAgend,
            ':valor' => $valorAgend,
            ':estado_conta' => $estadoContaAgend,
            ':id_agendamento' => $id_agendamento,
        ));

        //Testa se o update foi bem sucedido
        if ($result) {
            $_SESSION['message'] = 'Dados alterados com sucesso!';
            $_SESSION['message_type'] = 'success';
            header("Location: ../PHP/Agendamentos.php");
            exit;
        } else {
            header("Location: ../PHP/Agendamentos.php?msg=" . urlencode("Não foi possivel realizar a alteração!"));
            exit;
        }
    } catch (Exception $e) {
        echo "Erro ao inserir os dados" .
            "Número do erro: " . $e->getMessage();
    }
}
?>