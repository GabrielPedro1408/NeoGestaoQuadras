<?php
session_start();

require 'database.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$tele = $_POST['tel'];
$cpf = $_POST['cpf'];

$sql = "update clientes SET nome=?, email=?, endereco=?,telefone=?,cpf=? where id = ?";
$stmt = $conn ->prepare($sql);
$stmt -> bind_param('sssssi', $nome, $email, $endereco, $tele, $cpf, $id);
$stmt -> execute();

echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <div class="contaner">';

if($stmt -> affected_rows > 0){
    echo'<div class="alert_success">Cliente alterado com sucesso!</div>';
} else {
    echo'<div class="alert_erro">Erro ao alterar os dados do cliente' . $conn->error . '</div>';
}

echo'<button class="btn" onclick="window.location.href=\'Cliente.php\'">Voltar</button>';

echo'  </div>
</body>
</html>';

$stmt->close();
$conn->close();
?>

        
        
        
  