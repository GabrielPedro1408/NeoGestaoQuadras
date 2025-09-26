<?php
include_once __DIR__ . '/../../../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_fluxo = $_POST['id_fluxo'];
    try {
        $stmt = $pdo->prepare('DELETE FROM fluxo_financeiro WHERE id = :id_fluxo');
        $result = $stmt->execute(array(':id_fluxo' => $id_fluxo));
        if ($result) {
            $_SESSION['message'] = 'Dados excluídos com sucesso!';
            $_SESSION['message_type'] = 'success';
            header("Location: ../../../fluxoFinanceiro.php");
            exit;
        } else {
            $_SESSION['message'] = 'Não foi possivel excluir os dados!';
            $_SESSION['message_type'] = 'danger';
            header("Location: ../../../fluxoFinanceiro.php");
            exit;
        }
    } catch (PDOException $e) {
        echo "Erro ao inserir os dados" .
        "Número do erro: " . $e->getMessage();
    }
}
?>