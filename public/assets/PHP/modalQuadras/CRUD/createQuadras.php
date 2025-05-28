<?php 

    include_once __DIR__ . '/../../conexao.php';

    if (isset($_POST["cadastrar"])) {
        $id_empresa = 1;
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