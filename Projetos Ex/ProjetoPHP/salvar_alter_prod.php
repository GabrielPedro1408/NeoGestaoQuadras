<?php
session_start();

require 'database.php';

$id =$_POST['id'];
$descr =$_POST['descr'];
$preco = $_POST['preco'];
$quant  = $_POST['quant'];
$garant =   $_POST['garant'];

$sql = "update produtos set descr=?, preco=?, quant_e=?, garantia=? where id = ?";
$stmt = $conn->prepare($sql);
$stmt ->bind_param('ssssi', $descr, $preco, $quant, $garant, $id);
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

echo'<button class="btn" onclick="window.location.href=\'Produto.php\'">Voltar</button>';

echo'  </div>
</body>
</html>';

$stmt->close();
$conn->close();
?>