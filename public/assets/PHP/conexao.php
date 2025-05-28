<?php
$servidor='localhost';
$db = "neogestão";
$user = 'root';
$pass = '';
try {
  $pdo = new PDO('mysql:host='.$servidor.';dbname='.$db ,  $user, $pass);
  echo "Conexão com o banco de dados realizada com sucesso";
} catch (PDOException $e) {
  echo "erro com a conexão ao banco de dados";
  echo "Erro número:" . $e->getMessage();
}
?>
