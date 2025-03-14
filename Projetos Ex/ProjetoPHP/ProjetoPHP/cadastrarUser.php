<?php   
session_start();
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == $_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("insert into users (email, username, password) values (?,?,?)");
    if($stmt === false){
        die('prepare() failed ' . htmlspecialchars($con->error));
    }

    $stmt->bind_param('s', $email);
    $stmt->bind_param('s', $username);
    $stmt->bind_param('s', $password);
    $result = $stmt->execute();

    if($result->num_rows > 0){
        echo "Cadastro reaalizado com sucesso";
        header('Location: index.php');s
        exit();
    } else {
        echo "Hove um erro ao se cadastrar";
    }
}
?>