<?php
session_start();
if(!isset($_SESSION['nome'])){
    header('Location: login.php');
    exit();
}
require 'database.php';

$nome = $_POST['nome_cli'];
$email = $_POST['email_cli'];
$endereco = $_POST['end_cli'];
$tele = $_POST['tel_cli'];
$cpf = $_POST['cpf_cli'];

try{
    $stmt = $conn -> prepare("insert into clientes (nome, email, endereco, telefone, cpf) values (?,?,?,?,?)");
    $stmt -> bind_param("sssss", $nome, $email, $endereco,$tele, $cpf);
    $stmt -> execute();
    if($stmt->affected_rows > 0){
        echo "Produto cadastrado!";
    } else {
        echo "Erro!";
    } 
} catch (mysqli_sql_exception $e){
    echo $e;
}


$stmt -> close();
$conn -> close(); 
?>