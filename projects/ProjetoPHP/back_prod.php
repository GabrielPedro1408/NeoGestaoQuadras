<?php
session_start();

if(!isset($_SESSION['nome'])){
    header('Location: login.php');
    exit();
}

require 'database.php';

$descr = $_POST['descr_prod'];
$preco = $_POST['preco'];
$qtde_e = $_POST['Qtde_E'];
$garant = $_POST['garant'];

try{
    $stmt = $conn->prepare("insert into produtos(descr, preco, quant_e, garantia) values (?,?,?,?)");
    $stmt -> bind_param("ssss",$descr,$preco,$qtde_e,$garant);
    $stmt -> execute();
    if($stmt->affected_rows > 0){
        echo "Produto cadastrado!";
    } else {
        echo "Erro!";
    }
} catch (mysqli_sql_exception $e){
    echo $e;
}

$stmt->close();
$conn->close();
?>
