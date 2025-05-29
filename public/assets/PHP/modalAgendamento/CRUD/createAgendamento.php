<?php
    
    include_once __DIR__ . '/../../conexao.php';

    if (isset($_POST["cadastrar"])) {

        /* passagem de parametros*/
        $id_empresa = 1;
        $id_cliente = $_POST["id_cliente"];
        $id_quadra = $_POST["id_quadra"];
        $dataAgend = $_POST["dataAgend"];
        $horarioAgend = $_POST["horarioAgend"];
        $horarioFimAgend = $_POST["horarioFimAgend"];
        $valorAgend = $_POST["valorAgend"];
        $estadoContaAgend = $_POST["estadoContaAgend"];
        
        try {
            /* inserçaõ no b.d. */
            $sql = "INSERT into agendamentos(id_empresa,id_cliente,id_quadra,dt,horario_agendado,tempo_alocado,valor,estado_conta) 
            values (:id_empresa, :id_cliente, :id_quadra,:dataAgend,:horarioAgend,:horarioFimAgend,:valorAgend,:estadoContaAgend )" ;
            

            /*preparando o envio para o $pdo dentro de conexao.php */ 
            $stmt = $pdo->prepare($sql);


            /* mostrando qual valores vão ser passados dentro de stmt */
            $stmt -> bindParam(':id_empresa', $id_empresa);
            $stmt -> bindParam(':id_cliente', $id_cliente);
            $stmt -> bindParam(':id_quadra', $id_quadra);
            $stmt -> bindParam(':dataAgend', $dataAgend);
            $stmt -> bindParam(':horarioAgend', $horarioAgend);
            $stmt -> bindParam(':horarioFimAgend', $horarioFimAgend);
            $stmt -> bindParam(':valorAgend', $valorAgend);
            $stmt -> bindParam(':estadoContaAgend', $estadoContaAgend);
            
            /* executando o que eu fiz aí em cima */
            
            $result = $stmt->execute();

            if ($result) {
                $_SESSION['message'] = 'Dados inseridos com sucesso!';
                $_SESSION['message_type'] = 'success'; // Bootstrap: verde
            } else {
                $_SESSION['message'] = 'Erro ao inserir os dados!';
                $_SESSION['message_type'] = 'danger'; // Bootstrap: vermelho
            }
            header("Location: ../PHP/Agendamentos.php");
            exit;
        } 
        catch (PDOException $e) {
            echo "Erro ao inserir os dados" .
            "Número do erro: " . $e -> getMessage() ;
        }
    }
?>