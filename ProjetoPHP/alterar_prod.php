<?php
session_start();

$id = $_POST['id'];

require 'database.php';

$sql = "select * from produtos where id=?";
$stmt = $conn->prepare($sql);
$stmt ->bind_param('i', $id);
$stmt ->execute();
$result = $stmt->get_result();

if($result -> num_rows == 1){
    $produto = $result->fetch_assoc();
    echo"cliente encontrado";
} else {
    echo"Não foi possivel encontrar o cliente";
    exit();
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
    <link rel="stylesheet" href="#">
</head>
<body>
<div class="principal">
    <div class="cabecalho">
        <h2>Salvar Alteração</h2>
    </div>
    <div class="formulario">
        <form action="salvar_alter_prod.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($produto['id']);?>">
            <br>
            <label for="nome">Descrição:</label>
            <br>
            <input type="text" name="descr" id="descr" value="<?php echo htmlspecialchars($produto ['descr']) ?>" required>
            <br>
            <br>
            <label for="nome">Preço:</label>
            <br>
            <input type="text" name="preco" id="preco" value="<?php echo htmlspecialchars($produto ['preco']) ?>" required>
            <br>
            <br>
            <label for="nome">Quantidade estoque:</label>
            <br>
            <input type="text" name="quant" id="quant" value="<?php echo htmlspecialchars($produto ['quant_e']) ?>" required>
            <br>
            <br>
            <label for="nome">Garantia:</label>
            <br>
            <input type="text" name="garant" id="garant" value="<?php echo htmlspecialchars($produto ['garantia']) ?>" required>
            <br>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>    
</body>
</html>