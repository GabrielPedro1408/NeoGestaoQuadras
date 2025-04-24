<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPL Quadras</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <?php 
        include '../PHP/conexao.php';
    ?>
    <!-- start main -->
    <main>
        <!-- start title -->
        <div class="titulo">
            <h1><strong>Clientes</strong></h1>
        </div>
        <!-- end title -->
        <!-- start forms cadastro -->
        <div class="formulario-cadastro">
            <form action="formularioCadastroCli.php" method="post" id="cadastroClientes">
                <div class="form">
                    <!-- start personal details client -->
                    <div id="personal-details">
                        <div class="title">
                            <h3 class="title">Informações Pessoais</h3>
                        </div>
                        <div id="name">
                            <div class="name">
                                <label for="nameCli">Nome:</label>
                                <input type="text" name="nameCli" id="nameCli">
                                <?php $nome = $_POST['nameCli']; ?>
                            </div>
                            <div class="last-name">
                                <label for="lastnameCli">Sobrenome:</label>
                                <input type="text" name="lastnameCli" id="lastnameCli">
                                <?php $sobrenome = $_POST['lastnameCli']; ?>
                            </div>
                        </div>
                        <div class="birth-date">
                            <label for="birthDate">Data de nascimento:</label>
                            <input type="date" name="birthDate" id="birthDate">
                            <?php $dataNasc = $_POST['birthDate']; ?>
                        </div>
                        <div class="mail-client">
                            <label for="mailClient">Email:</label>
                            <input type="email" name="mailClient" id="mailClient">
                            <?php $email = $_POST['mailClient']; ?>
                        </div>
                        <div class="rg-client">
                            <label for="rgClient">RG:</label>
                            <input type="text" name="rgClient" id="rgClient">
                            <?php $rg = $_POST['rgClient']; ?>
                        </div>
                        <div class="cpf-client">
                            <label for="cpfClient">CPF:</label>
                            <input type="text" name="cpfClient" id="cpfClient">
                            <?php $cpf = $_POST['cpfClient']; ?>
                        </div>
                        <div class="number-client">
                            <label for="numberClient">Celular:</label>
                            <input type="text" name="numberClient" id="numberClient">
                            <?php $celular = $_POST['numberClient']; ?>
                        </div>
                    </div>
                    <!-- end personal details client -->
                    <!-- start address client -->
                    <div id="address">
                        <div class="title">
                            <h3 class="title">Endereço</h3>
                        </div>
                        <div class="cep">
                            <label for="cepCli">CEP:</label>
                            <input type="text" name="cepCli" id="cepCli">
                            <?php $cep = $_POST['cepCli']; ?>
                        </div>
                        <div class="estado">
                            <label for="estadoCli">Estado:</label>
                            <input type="text" name="estadoCli" id="estadoCli">
                            <?php $estado = $_POST['estadoCli']; ?>
                        </div>
                        <div class="cidade">
                            <label for="cidadeCli">Cidade:</label>
                            <input type="text" name="cidadeCli" id="cidadeCli">
                            <?php $cidade = $_POST['cidadeCli']; ?>
                        </div>
                        <div class="rua">
                            <label for="ruaCli">Rua:</label>
                            <input type="text" name="ruaCli" id="ruaCli">
                            <?php $rua = $_POST['ruaCli']; ?>
                        </div>
                        <div class="ncasa">
                            <label for="numerocasaCli">Número:</label>
                            <input type="text" name="numerocasaCli" id="numerocasaCli">
                            <?php $nCasa = $_POST['numerocasaCli']; ?>
                        </div>
                        <div class="complemento">
                            <label for="complementoCli">Complemento:</label>
                            <input type="text" name="complementoCli" id="complementoCli">
                            <?php $complemento = $_POST['complementoCli']; ?>
                        </div>
                    </div>
                    <!-- end address client -->
                    <input type="submit" value="Enviar">
                    <!--  estado cep cidade rua nCasa complemento -->

                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == $_POST){
                    $stmt = $pdo->prepare();
                    if($stmt === false){
                        die('prepare() failed ' . htmlspecialchars($pdo->error));
                    }
                    $stmt = $pdo->prepare("INSERT INTO clientes (nome, sobrenome, data_nascimento, email, rg, cpf, celular, cep, estado, cidade, rua, numero_casa, complemento) VALUES (:nome, :sobrenome, :data_nascimento, :email, :rg, :cpf, :celular, :cep, :estado, :cidade, :rua, :numero_casa, :complemento)");
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':sobrenome', $sobrenome);
                    $stmt->bindParam(':data_nascimento', $dataNasc);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':rg', $rg);
                    $stmt->bindParam(':cpf', $cpf);
                    $stmt->bindParam(':celular', $celular);
                    $stmt->bindParam(':cep', $cep);
                    $stmt->bindParam(':estado', $estado);
                    $stmt->bindParam(':cidade', $cidade);
                    $stmt->bindParam(':rua', $rua);
                    $stmt->bindParam(':numero_casa', $nCasa);
                    $stmt->bindParam(':complemento', $complemento);

                   $result = $stmt->execute();
               
                   if($result->num_rows > 0){
                       echo "Cadastro reaalizado com sucesso";
                       header('Location: index.php');
                   } else {
                       echo "Hove um erro ao se cadastrar";
                   }
               }

            ?>
        </div>
        <!-- end forms cadastro -->
    </main>
    <!-- end main -->

    <!-- start footer -->
    <footer>

    </footer>
    <!-- end footer -->
</body>

</html>