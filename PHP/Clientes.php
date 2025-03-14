<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="module" src="../components/sidebar.js"></script>
    <script type="module" src="../components/header.js"></script>
    <link rel="shortcut icon" href="../images/financeiro.png" type="image/x-icon">
    <title>NPL Quadras</title>

</head>
<body>
    
    <?php
        require '../components/header.php';
        require '../components/sidebar.php';
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
            <form action="#" method="post" id="cadastroClientes">
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
                            </div>
                            <div class="last-name">
                                <label for="lastnameCli">Sobrenome:</label>
                                <input type="text" name="lastnameCli" id="lastnameCli">
                            </div>
                        </div>
                        <div class="birth-date">
                            <label for="birthDate">Data de nascimento:</label>
                            <input type="date" name="birthDate" id="birthDate">
                        </div>
                        <div class="mail-client">
                            <label for="mailClient">Email:</label>
                            <input type="email" name="mailClient" id="mailClient">
                        </div>
                        <div class="rg-client">
                            <label for="rgClient">RG:</label>
                            <input type="text" name="rgClient" id="rgClient">
                        </div>
                        <div class="cpf-client">
                            <label for="cpfClient">CPF:</label>
                            <input type="text" name="cpfClient" id="cpfClient">
                        </div>
                        <div class="number-client">
                            <label for="numberClient">Celular:</label>
                            <input type="text" name="numberClient" id="numberClient">
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
                        </div>
                        <div class="estado">
                            <label for="estadoCli">Estado:</label>
                            <input type="text" name="estadoCli" id="estadoCli">
                        </div>
                        <div class="cidade">
                            <label for="cidadeCli">Cidade:</label>
                            <input type="text" name="cidadeCli" id="cidadeCli">
                        </div>
                        <div class="rua">
                            <label for="ruaCli">Rua:</label>
                            <input type="text" name="ruaCli" id="ruaCli">
                        </div>
                        <div class="ncasa">
                            <label for="numerocasaCli">Número:</label>
                            <input type="text" name="numerocasaCli" id="numerocasaCli">
                        </div>
                        <div class="complemento">
                            <label for="complementoCli">Complemento:</label>
                            <input type="text" name="complementoCli" id="complementoCli">
                        </div>
                    </div>
                    <!-- end address client -->
                    <input type="submit" value="Enviar">
                    <!--  estado cep cidade rua nCasa complemento -->

                </div>
            </form>
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