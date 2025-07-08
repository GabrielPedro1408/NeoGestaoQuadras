<?php 
    if(!isset($_SESSION['username'])) {
        header('Location: login.php?error=Você precisa fazer login para acessar esta página.');
        exit();
    }
    include_once __DIR__ . '/../../conexao.php';

    if (isset($_POST["cadastrar"])) {
        $usuario = $_SESSION['username'];
        $id_empresa = buscarIdEmpresa($usuario);
        $descr = $_POST['descr'];
        $disponibilidadeQuadra = $_POST['disponibilidadeQuadra'];
        $modalidadeQuadra = $_POST['modalidadeQuadra'];
        $valoragendQuadra = $_POST['valoragendQuadra'];

        $sql = "INSERT into quadras(id_empresa, id_modalidade, descr,disponibilidade,valor_hora)".
                "values (:id_empresa, :modalidadeQuadra, :descr, :disponibilidadeQuadra, :valoragendQuadra)";

        $stmt = $pdo->prepare($sql); 
        
        $stmt -> bindParam(':id_empresa', $id_empresa);
        $stmt -> bindParam(':descr', $descr);
        $stmt -> bindParam(':disponibilidadeQuadra', $disponibilidadeQuadra);
        $stmt -> bindParam(':modalidadeQuadra', $modalidadeQuadra);
        $stmt -> bindParam(':valoragendQuadra', $valoragendQuadra);

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