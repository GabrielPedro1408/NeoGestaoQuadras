<?php
session_start();

$id = $_POST['id'];

require 'database.php';

$sql = "select * from users where id = ?";
$stmt = $conn -> prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if($result -> num_rows == 1){
    echo"Usuário encontrado";
    $user = $result->fetch_assoc();
} else {
    echo"Não foi possivel encontrar o usuário";
    exit();
}

$stmt -> close();
$conn -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar user</title>
</head>
<body>
<div class="principal">
    <div class="cabecalho">
        <h2>Salvar Alteração</h2>
    </div>
    <div class="formulario">
        <form action="salvar_alteração_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']);?>">
            <br>
            <label for="user">Nome de usuário:</label>
            <br>
            <input type="text" name="user" id="user" value="<?php echo htmlspecialchars($user ['username']) ?>" required>
            <br>
            <br>
            <label for="senha">Senha:</label>
            <br>
            <input type="text" name="senha" id="senha" value="<?php echo htmlspecialchars($user ['password']) ?>" required>
            <br>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($user ['email']) ?>" required>
            <br>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </div>        
</div>    
</body>
</html>