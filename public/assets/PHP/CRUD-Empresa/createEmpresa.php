<?php 
include_once __DIR__ . '/../../conexao.php';

if (isset($_POST['cadastrar'])){
    $razaoSocial = $_POST['razaoSocial'];
    $emailEmpresa = $_POST['emailEmpresa'];
    $telefoneEmpresa = $_POST['telefoneEmpresa'];
    $cnpjEmpresa = $_POST['cnpjEmpresa'];
    $cepEmpresa = $_POST['cepEmpresa'];
    $numeroEmpresa = $_POST['numeroEmpresa'];
    $cidadeEmpresa = $_POST['cidadeEmpresa'];
    $ruaEmpresa= $_POST['ruaEmpresa'];
    $ufEmpresa = $_POST['ufEmpresa'];

    $sql = "INSERT into empresa(razao_social,email,telefone,cnpj,cep,uf,cidade,rua,numero)".
    "values(:razaoSocial,:emailEmpresa,:telefoneEmpresa,:cnpjEmpresa,:cepEmpresa,:ufEmpresa,:cidadeEmpresa,:ruaEmpresa,:numeroEmpresa)";

    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(':razaoSocial',$razao_social);
    $stmt -> bindParam(':emailEmpresa', $email);
    $stmt -> bindParam(':telefoneEmpresa', $telefone);
    $stmt -> bindParam(':cnpjEmpresa', $cnpj);
    $stmt -> bindParam(':cepEmpresa', $cep);
    $stmt -> bindParam(':ufEmpresa', $uf);
    $stmt -> bindParam(':cidadeEmpresa', $cidade);
    $stmt -> bindParam(':ruaEmpresa', $rua);
    $stmt -> bindParam(':numeroEmpresa', $numero);
    
    /* executando o que eu fiz aí em cima */
    
    $result = $stmt->execute();

    if (!$result) {
        var_dump($stmt->errorInfo());
        exit;
    }
     else {
        echo $stmt->rowCount() . "Linhas Inseridas";
     }
}
?>
