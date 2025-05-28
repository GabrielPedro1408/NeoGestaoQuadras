<?php
$servidor='localhost';
$db = "neogestão";
$user = 'root';
$pass = ''; 
try {
  $pdo = new PDO('mysql:host='.$servidor.';dbname='.$db ,  $user, $pass);
} catch (PDOException $e) {
    echo 'Erro número : ' . $e->getMessage();
}
?>  