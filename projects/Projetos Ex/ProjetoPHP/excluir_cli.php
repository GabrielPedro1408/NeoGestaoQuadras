<?php
    session_start();

    require 'database.php';
    
    $id =$_POST['id_cli'];
    
    $sql = "delete from clientes where id = ?";
    $stmt = $conn->prepare($sql);
    $stmt ->bind_param('s', $id);
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
        echo'<div class="alert_success">Cliente excluido com sucesso!</div>';
    } else {
        echo'<div class="alert_erro">Erro ao excluir os dados do cliente' . $conn->error . '</div>';
    }
    
    echo'<button class="btn" onclick="window.location.href=\'Cliente.php\'">Voltar</button>';
    
    echo'  </div>
    </body>
    </html>';
    
    $stmt->close();
    $conn->close();
?>