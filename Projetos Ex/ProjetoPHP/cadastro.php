<?php
session_start();

require 'database.php';

$username = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

try{
    $stmt = $conn->prepare("insert into users(username, password, email) values (?,?,?)");
    $stmt->bind_param("sss", $username,$pass,$email);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        echo"Novo usuário gravado com sucesso!";
    } else {
        echo"Erro ao gravar";
    }
} catch(mysqli_sql_exception $e){
    echo $e;
}

$stmt->close();
$conn->close();
session_destroy();
?>