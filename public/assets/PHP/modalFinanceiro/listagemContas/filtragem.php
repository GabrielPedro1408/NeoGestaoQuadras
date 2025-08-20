<?php
    header('Content-Type: application/json; charset=utf-8');
    session_start();

    require_once __DIR__ . '/../../conexao.php';
    require_once __DIR__ . '/../../../src/buscarIdEmpresa.php';

    $id_empresa = buscarIdEmpresa($_SESSION['username']);
    if (!$id_empresa) {
        echo json_encode(['error' => 'Empresa não encontrada']);
        exit;
    }
    try {
        
        $descricao = $_GET['descricao'] ?? '';
        $categoria = $_GET['categoria'] ?? '';
        $tipo = $_GET['tipo'] ?? '';
        $dataFiltro = $_GET['data'] ?? '';
        $query = "SELECT * FROM contas WHERE id_empresa = :id_empresa";
        $params = [':id_empresa' => $id_empresa];
        // Filtro por descrição
        if (!empty($descricao)) {
            $query .= " AND descricao LIKE :descricao";
            $params[':descricao'] = "%" . $descricao . "%";
        }

        // Filtro por categoria 
        if (!empty($categoria)) {
            $query .= " AND categoria = :categoria";
            $params[':categoria'] = $categoria;
        }

        // Filtro por tipo de conta
         if (!empty($tipo)) {
            $query .= " AND tipo LIKE :tipo";
            $params[':tipo'] = $tipo;
        } 

        // Filtro por data de vencimento
        if (!empty($dataFiltro)) {
            $query .= " AND data_vencimento = :data";
            $params[':data'] = $dataFiltro;
        }
        $sql = $pdo->prepare($query);
        $sql->execute($params);
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        if (!$data) $data = [];
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
        exit;
        
    }
?>
