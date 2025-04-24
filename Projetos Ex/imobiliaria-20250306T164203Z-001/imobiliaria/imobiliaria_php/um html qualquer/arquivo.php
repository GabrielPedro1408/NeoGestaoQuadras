<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>NPL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="arquivo.php">NPL Imoveis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                 
                </ul>
                <form method="post" class="d-flex" role="search" action="arquivo.php">
                    <input class="form-control me-2" type="search" placeholder="Informe a cidade" aria-label="Search"
                        name="pesquisaCiadede">
                    <button class="btnbtn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="filters" id="filters">
            <form action="arquivo.php" method="post">
            <div class="categorias">
                <label for="categorias"><strong>Categoria</strong></label>
                <select class="form-select" aria-label="Default select example" id="categorias" name="categorias">
                    <option selected>Todos</option>
                    <option value="1">Casa</option>
                    <option value="1">Sobrado</option>
                    <option value="1">Terrea</option>
                    <option value="1">Condomínio</option>
                    <option value="2">Apartamento</option>
                    <option value="2">Duplex</option>
                    <option value="2">Flat</option>
                    <option value="2">Cobertura</option>
                    <option value="2">Kitnet</option>
                    <option value="3">Terreno</option>
                    <option value="3">Terreno Condomínio</option>
                    <option value="3">Terreno Represa </option>
                </select>
            </div><!--categorias-->

            <div class="negocio">
                <label for="negocio"><strong>Negócio</strong></label>
                <select class="form-select" aria-label="Default select example" id="negocio" name="negocio">
                    <option value="1">Compra</option>
                    <option value="2">Aluguel</option>
                    <option value="3">Temporada</option>
                    <option value="4">Leilões</option>
                    <option value="5">Novos</option>
                </select>
                <br>
            </div><!--negocio-->

            <div class="metragem">
                    <label for="metragem"><strong>Metragem</strong></label>
                    <input class="box" type="number" min="0" name="metragem" id="metragem" placeholder="0">
            </div><!--metragem-->

            <div class="banheiros">
                <label for="banheiros"><strong>Banheiros</strong></label>
                <input class="box" type="number" min="0"name="banheiros" id="banheiros"  placeholder="0">
            </div><!--banheiros-->

            <div class="suites">
                <label for="suites"><strong>Suites</strong></label>
                <input class="box" type="number" min="0"name="suites" id="suites" placeholder="0">
            </div><!--suites-->

            <div class="quarto">
                <label for="quarto"><strong>Quartos</strong></label>
                <input class="box" type="number" min="0"name="quarto" id="quarto" placeholder="0">
            </div><!--quarto-->

            <div class="valor"> 
                <label for="valor"><strong>Valor R$</strong>:</label>
                <input class="box" type="number" min="0"name="valor" id="valor" step="50000" placeholder="0">
            </div><!--valor-->

            <div class="buscar">
                <input class="buscar" type="submit"min="0" value="Buscar" name="buscar" id="buscar" >
            </div><!--buscar-->

            </div><!--filters-->
        </form>

        <?php

            include "conexao.php";
            if ( $_SERVER["REQUEST_METHOD"]  != "POST" ){
                //Caso nenhum filtro tenha sido selecionado 
            $sql = "SELECT DISTINCT (imovel.id), imovel.id, imovel.titulo, imovel.descricao, imovel.metragem, imovel.quartos, imovel.suites, imovel.banheiros, imovel.id_tipo_imovel_subcategorias, imovel.tipo_negocio, imovel.valor, imovel.IPTU, imovel.cidade, imovel.bairro, imovel.endereco, imagens.imagem FROM imovel LEFT JOIN imagens ON imovel.id = imagens.id_imovel GROUP by imagens.id_imovel, imovel.id;";

            $imovel = $conn->prepare($sql);
            $imovel->execute();
            if ($imovel->rowCount()>=1){
                foreach($imovel as $linha){
                    echo "<div class='centro'>";
                    echo "<div class='card' style='width: 100%;'><div class='card-body'>";
                    echo "<img align='left' src='C:/User/Pichau/Desktop/".$linha["id"]."/".$linha["imagem"]."' width='250' height='250'>";
                    echo "<h4 class='card-title '>R$ ".number_format($linha["valor"],2,",",".")."</h4>";
                    echo "<h5 class='card-subtitle text-muted'>".$linha["bairro"].", ".$linha["cidade"]."</h5><br>";
                    echo "<h6 class='card-subtitle text-muted'>".$linha["metragem"]." m2&nbsp;&nbsp;&nbsp;".$linha["quartos"]." quartos&nbsp;&nbsp;&nbsp;".$linha["suites"]." suítes&nbsp;&nbsp;&nbsp;".$linha["banheiros"]." banheiro(s)&nbsp;&nbsp;&nbsp; </h6>";
                    echo "<p class='card-text'>".$linha["descricao"]."</p>";
                    echo "</div></div></div>";
                }
            } else {
                echo "<script>alert('Dados não encontrados');history.go(-1);</script>";
            }
            } else {
                //Filtro categoria
                $categoria = $_POST["categorias"];
                $sqlID = "SELECT id from tipo_imovel_subcategoria where subcategoria = $categoria";
                $subcategoria = $conn->prepare($sqlID);
                $subcategoria->execute();
                if($subcategoria -> rowCount() >= 1){
                    $idSub = $subcategoria["id"];
                }   
                $sqlCategoria = "SELECT DISTINCT (imovel.id), imovel.id, imovel.titulo, imovel.descricao, imovel.metragem, imovel.quartos, imovel.suites, imovel.banheiros, imovel.id_tipo_imovel_subcategorias, imovel.tipo_negocio, imovel.valor, imovel.IPTU, imagens.imagem FROM imovel LEFT JOIN imagens ON imovel.id = imagens.id_imovel where id_tipo_imovel_subcategorias = '".$idSub."' GROUP by imagens.id_imovel, imovel.id;";
                $imovel = $conn->prepare($sql);
                $imovel -> execute();
            if ($imovel->rowCount()>=1){
                foreach($imovel as $linha){
                    echo "<div class='centro'>";
                    echo "<div class='card' style='width: 100%;'><div class='card-body'>";
                    echo "<img align='left' src='fotos/".$linha["id"]."/".$linha["imagem"]."' width='250' height='250'>";
                    echo "<h4 class='card-title '>R$ ".number_format($linha["valor"],2,",",".")."</h4>";
                    echo "<h5 class='card-subtitle text-muted'>".$linha["bairro"].", ".$linha["cidade"]."</h5><br>";
                    echo "<h6 class='card-subtitle text-muted'>".$linha["metragem"]." m2&nbsp;&nbsp;&nbsp;".$linha["quartos"]." quartos&nbsp;&nbsp;&nbsp;".$linha["suites"]." suítes&nbsp;&nbsp;&nbsp;".$linha["banheiros"]." banheiro(s)&nbsp;&nbsp;&nbsp; </h6>";
                    echo "<p class='card-text'>".$linha["descricao"]."</p>";
                    echo "</div></div></div>";
                }

            } else {
                echo "<script>alert('Dados não encontrados');history.go(-1);</script>";
            }
        }
            ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>
</html>