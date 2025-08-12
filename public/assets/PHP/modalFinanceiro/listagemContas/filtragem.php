<?php 
header('Content-Type: application/json; charset=utf-8');
include_once __DIR__ . '/../../conexao.php';

$data = [];
$where = '';

$busca = filter_input(INPUT_POST, 'busca', FILTER_DEFAULT);
if ($busca) 
    $where = "WHERE descricao LIKE :descricao";
    $query = $pdo->prepare( "SELECT * FROM contas $where");

    if ($busca) $query->bindValue(':descricao', "%$busca%");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data, JSON_UNESCAPED_UNICODE);
exit;
?>