<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Quadras</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="public/assets/CSS/all.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>

<body>

    <main>
        <!-- start title -->
        <div class="titulo">
            <h1><strong>Quadras</strong></h1>
        </div>
        <!-- end title -->
        <div class="radio-group">
            <div class="formulario-cadastro"> 
                <div class="description">
                    <form action="cadastrar-quadra" method="POST">
                        <label for="Descricao">Descrição da Quadra</label>
                        <input type="text" class="form-control" id="floatingInputValue" placeholder="Insira Descrição"  value="descricao" name="descricao" required>
                        </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="disponivel" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    Disponível
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="indisponivel" id="checkChecked" checked>
                <label class="form-check-label" for="checkChecked">
                    Indisponível
                </label>
            </div>
            </div>
                <div class="modalidade">
                    <label for="modalidade">Tipo de Modalidade:</label>
                    <select class="form-selection" aria-label="Default select example" id="modalidade" name="modalidade" required>
                        <option disabled selected>Selecione uma modalidade</option>
                        <option value="futebol">Futebol</option>
                        <option value="basquete">Basquete</option>
                        <option value="volei">Vôlei</option>
                        <option value="tenis">Tênis</option>
                        <option value="handebol">Handebol</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <!-- Campo para o valor da quadra -->
                <div class="valor">
                    <label for="valor">Valor da Hora:</label>
                    <input type="text" id="valor" name="valor" required>
                </div>
                <label for=""></label>
                <input type="submit" value="Cadastrar Quadra">
            </form>
        </div>    
    </main>
</body>

</html>