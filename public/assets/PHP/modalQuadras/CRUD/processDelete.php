<?php
include_once __DIR__ . '/../../conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_quadra = $_POST['id_quadra'];
    try {
        $stmt = $pdo->prepare('DELETE FROM quadras WHERE id = :id_quadra');

        $result = $stmt->execute(array(':id_quadra' => $id_quadra));
        //Testa se o update foi bem sucedido
        if ($result) {
            $_SESSION['message'] = 'Dados excluídos com sucesso!';
            $_SESSION['message_type'] = 'success';
            header("Location: ../../Quadras.php");
            exit;
        } else {
            $_SESSION['message'] = 'Não foi possivel excluir os dados!';
            $_SESSION['message_type'] = 'danger';
            header("Location: ../../Quadras.php");
            exit;
        }
    } catch (Exception $e) {
        "Número do erro: " . $e->getMessage();
    }
}
?>