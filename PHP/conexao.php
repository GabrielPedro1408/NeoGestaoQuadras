<?php

$servidor='localhost';
$db = "nopelogestao";
$user = 'root';
$pass = ''; 

try {

  $conn = new PDO('mysql:host='.$servidor.';dbname='.$db ,  $user, $pass);

} catch (PDOException $e) {
    echo 'Erro número : ' . $e->getMessage();
}

?>