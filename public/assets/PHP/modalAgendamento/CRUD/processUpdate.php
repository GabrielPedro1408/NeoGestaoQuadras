<?php
include_once __DIR__ . '/../../conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_agendamento = $_POST['id_agendamento'];

    $buscaAgend = $pdo->prepare('SELECT dt, horario_agendado, tempo_alocado, valor, estado_conta FROM agendamentos where id = :id_agendamento');
    $buscaAgend->execute(array(':id_agendamento' => $id_agendamento));
    $agendamento = $buscaAgend->fetch(PDO::FETCH_ASSOC);

    //Pega o id do novo cliente
    $buscaNovoNome = $pdo->prepare('SELECT id FROM clientes WHERE nome = :nome');
    $buscaNovoNome->execute(array(':nome' => $_POST['clienteAgend']));
    $buscaNovoNome = $buscaNovoNome->fetch(PDO::FETCH_ASSOC);
    $idNovoNome = $buscaNovoNome['id'];

    //Pega o id da nova quadra
    $idNovaQuadra = $_POST['bosta']; //O value do select ja tras o id

    //Pega o restante dos dados
    $dateAgend = $_POST['dataAgend'];
    $horarioAgend = $_POST['horarioAgend'];
    $horarioFimAgend = $_POST['horarioFimAgend'];
    $valorAgend = $_POST['valorAgend'];
    $estadoContaAgend = $_POST['estadoContaAgend'];

    //Prepara a query MySQL para alterar os registros no banco
    /* $alteraAgend = $pdo->prepare('UPDATE agendamentos
    SET id_cliente = :id_cliente',id_qudara = :id_quadra, dt = :dt, horario_agendado = :horario_agendado,);
 */


}
?>