<?php
$servidor='localhost';
$db = "nopelogestao";
$user = 'root';
$pass = ''; 
try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname" , $username , $password);
} catch(PDOException $e) {
  echo json_encode(["message"=>"Erro de banco de dados".$e->getMessage()]);
}
?>
  