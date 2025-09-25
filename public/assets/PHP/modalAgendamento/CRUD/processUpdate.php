<?php
include_once __DIR__ . '/../../conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_agendamento = $_POST['id_agendamento'];

    try {
        $estadoContaAgend = $_POST['estado_cont_agend_edit'];

        //Prepara a query MySQL para alterar os registros no banco
        $alteraAgend = $pdo->prepare('UPDATE agendamentos
        SET estado_conta = :estado_conta
        WHERE id = :id_agendamento
        ');

        //Executa a query passando os valores necessários
        $result = $alteraAgend->execute(array(
            ':estado_conta' => $estadoContaAgend,
            ':id_agendamento' => $id_agendamento
        ));

        //Testa se o update foi bem sucedido
        if ($result) {
            $_SESSION['message'] = 'Dados alterados com sucesso!';
            $_SESSION['message_type'] = 'success';
            header("Location: ../../Agendamentos.php");
            exit;
        } else {
            header("Location: ../../Agendamentos.php?msg=" . urlencode("Não foi possivel realizar a alteração!"));
            exit;
        }
    } catch (Exception $e) {
        echo "Erro ao inserir os dados" .
            "Número do erro: " . $e->getMessage();
    }
}
?>