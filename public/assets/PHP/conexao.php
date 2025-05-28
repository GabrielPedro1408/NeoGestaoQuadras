<?php 
$local = '127.0.0.1';
$db = 'neogestão';
$user = 'root';
$pass = '';
try {
  $pdo = new PDO ("mysql:host=".$local.";dbname=".$db, $user, $pass);
} catch (PDOException $e) {
  echo "erro com a conexão ao banco de dados";
  echo "Erro número:" . $e->getMessage();
}
?>
