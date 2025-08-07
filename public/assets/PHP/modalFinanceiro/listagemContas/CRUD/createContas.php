<?php 
    if(!isset($_SESSION['username'])) {
        header('Location: login.php?error=Você precisa fazer login para acessar esta página.');
        exit();
    }
    include_once __DIR__ . '/../../../conexao.php';
    include_once __DIR__ . '/../../../../src/buscarIdEmpresa.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST'){

        $descrConta = $_POST['descrConta'];
        $tipoConta = $_POST['tipoConta'];
        $recorrencia = $_POST['recorrencia'];
        $valorConta = $_POST['valorConta'];
        $dataVencimentoConta = $_POST['dataVencimentoConta'];
        $tipo = $_POST['tipo'];
        $cpfCnpjConta = $_POST['cpfCnpjConta'];
        $observacoesConta = $_POST ['observacoesConta'];

        $username = $_SESSION['username'];

        try {
            $id_empresa = buscarIdEmpresa($username);

            $cadastroConta = $pdo->prepare(
                "INSERT INTO contas (id_empresa, descricao, tipo_conta, recorrencia, valor, data_vencimento, tipo, cpf_cnpj, observacao) 
                VALUES (:id_empresa, :descrConta, :tipoConta, :recorrencia, :valorConta, :dataVencimentoConta, :tipo,:cpfCnpjConta, :observacoesConta)");

            $queryConta = $cadastroConta->execute(array(
                ':id_empresa' => $id_empresa,
                ':descrConta' => $descrConta,
                ':tipoConta' => $tipoConta,
                ':recorrencia' => $recorrencia,
                ':valorConta' => $valorConta,
                ':dataVencimentoConta' => $dataVencimentoConta,
                ':tipo' => $tipo,
                ':cpfCnpjConta' => $cpfCnpjConta,
                ':observacoesConta' => $observacoesConta
            ));
            if (!$queryConta) {
                $_SESSION['message'] = 'Erro ao inserir os dados!';
                $_SESSION['message_type'] = 'danger';
                header("Location: ../PHP/ListagemContas.php");
                exit;
            } else {
                $_SESSION['message'] = 'Dados inseridos com sucesso!';
                $_SESSION['message_type'] = 'success';
                header("Location: ../PHP/ListagemContas.php");
                exit;
            }
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados, Número do erro: " . $e;
        }
    }

?>