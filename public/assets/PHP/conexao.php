<?php
$servidor = 'localhost';
$db = "neo_gestao";
$user = 'root';
$pass = '';
try {
  $pdo = new PDO('mysql:host=' . $servidor . ';dbname=' . $db, $user, $pass);

} catch (PDOException $e) {
  echo "erro com a conexão ao banco de dados";
  echo "Erro número:" . $e->getMessage();
}
?>