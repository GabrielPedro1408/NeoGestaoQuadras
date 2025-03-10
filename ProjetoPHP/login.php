<?php
session_start();
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("select * from users where username = ?");
    if($stmt === false){
        die('prepare() failed: ' . htmlspecialchars($conn->error));    
    }
    
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if($password == $user['password']){

            $_SESSION['nome'] = $username;
            header('Location: dashboard.php');
            exit();
        } else {
            header('Location: index.php?error=incorret');
            exit();
        }
    } else {
        header('Location: index.php?error=incorret');
        exit();
    }
}
?>