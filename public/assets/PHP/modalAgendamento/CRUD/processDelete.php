<?php
include_once __DIR__ . '/../../conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_agendamento = $_POST['id_agendamento'];

    try {
        //Prepara a query MySQL para excluir os registros no banco
        $excluiAgend = $pdo->prepare('DELETE FROM agendamentos WHERE id = :id_agendamento');

        //Executa a query passando o id
        $result = $excluiAgend->execute(array(':id_agendamento' => $id_agendamento));

        //Testa se o update foi bem sucedido
        if ($result) {
            header("Location: ../../Agendamentos.php?msg=" . urlencode("Agendamento excluído com sucesso!"));
        } else {
            header("Location: ../../Agendamentos.php?msg=" . urlencode("Não foi possivel excluir o agendamento!"));
        }


    } catch (Exception $e) {
        header("Location: ../../Agendamentos.php?msg=" . urlencode("Houve um erro ao se conectar com o banco!" . $e->getMessage()));
    }
}
?>