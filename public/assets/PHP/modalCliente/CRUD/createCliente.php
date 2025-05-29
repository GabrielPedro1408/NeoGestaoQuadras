<?php
    // resolver o problema que ele salva mesmo sem os dados
    // colocar o script que verifica se o campo está vazio
    // adicionar o script para verificar de qual empresa é o cliente a partir do usuario logado verificando a tabela empresa


    include_once __DIR__ . '/../../conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Guardar em variaveis os dados do formulário
        $nomeCli = $_POST['nomeCli'];
        $sobrenomeCli = $_POST['sobrenomeCli'];
        $dataNascCli = $_POST['dataNascCli'];
        $cpfCli = $_POST['cpfCli'];
        $rgCli = $_POST['rgCli'];
        $cepCli = $_POST['cepCli'];
        $cidadeCli = $_POST['cidadeCli'];
        $ruaCli = $_POST['ruaCli'];
        $ufCli = $_POST['ufCli'];
        $ncasaCli = $_POST['ncasaCli'];
        $celularCli = $_POST['celularCli'];
        $emailCli = $_POST['emailCli'];
        $complementocasaCli = $_POST['complementocasaCli'];

        //variavel para teste
        $id_empresa = 1; 
        
        try {
            $stmt = $pdo->prepare("INSERT INTO clientes (id_empresa, nome, sobrenome, dt_nascimento, email, cpf, rg, celular, cep, uf, cidade, rua, nCasa, complemento) 
            VALUES (:id_empresa, :nomeCli, :sobrenomeCli, :dataNascCli, :emailCli, :cpfCli, :rgCli, :celularCli, :cepCli, :ufCli, :cidadeCli, :ruaCli, :ncasaCli, :complementocasaCli)");

            $result = $stmt->execute(array(
                ':id_empresa' => $id_empresa,
                ':nomeCli' => $nomeCli,
                ':sobrenomeCli' => $sobrenomeCli,
                ':dataNascCli' => $dataNascCli,
                ':emailCli' => $emailCli,
                ':cpfCli' => $cpfCli,
                ':rgCli' => $rgCli,
                ':celularCli' => $celularCli,
                ':cepCli' => $cepCli,
                ':ufCli' => $ufCli,
                ':cidadeCli' => $cidadeCli,
                ':ruaCli' => $ruaCli,
                ':ncasaCli' => $ncasaCli,
                ':complementocasaCli' => $complementocasaCli
            ));
            if ($result) {
                $_SESSION['message'] = 'Dados inseridos com sucesso!';
                $_SESSION['message_type'] = 'success'; // Bootstrap: verde
            } else {
                $_SESSION['message'] = 'Erro ao inserir os dados!';
                $_SESSION['message_type'] = 'danger'; // Bootstrap: vermelho
            }
            header("Location: ../PHP/Clientes.php");
            exit;
            
        } catch (PDOException $e) {
            echo 'Erro número: ' . $e->getMessage();
        }
    }
?>