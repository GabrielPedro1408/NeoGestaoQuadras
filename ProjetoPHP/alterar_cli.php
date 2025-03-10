<?php
session_start();

$id = $_POST['id'];

require 'database.php';

$sql = "select * from clientes where id = ?";
$stmt = $conn -> prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if($result -> num_rows == 1){
    echo"cliente encontrado";
    $cliente = $result->fetch_assoc();
} else {
    echo"Não foi possivel encontrar o cliente";
    exit();
}

$stmt -> close();
$conn -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar alteração</title>
    <link rel="stylesheet" href="#">
</head>
<body>
<div class="principal">
    <div class="cabecalho">
        <h2>Salvar Alteração</h2>
    </div>
    <div class="formulario">
        <form action="salvar_alteração_cli.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($cliente['id']);?>">
            <br>
            <label for="nome">Nome:</label>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($cliente ['nome']) ?>" required>
            <br>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($cliente['email']) ?>" required>
            <br>
            <br>
            <label for="endereco">Endereço:</label>
            <br>
            <input type="text" name="endereco" id="endereco" value="<?php echo htmlspecialchars($cliente['endereco']) ?>" required>
            <br>
            <br>
            <label for="tel">Telefone:</label>
            <br>
            <input type="text" name="tel" id="tel" value="<?php echo htmlspecialchars($cliente['telefone']) ?>" required>
            <br>
            <br>
            <label for="cpf">Cpf:</label>
            <br>
            <input type="text" name="cpf" id="cpf" value="<?php echo htmlspecialchars($cliente['cpf']) ?>" required>
            <br>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>
</body>
</html>