<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Quadras</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

    <main>
        <!-- start title -->
        <div class="titulo">
            <h1><strong>Quadras</strong></h1>
        </div>
        <!-- end title -->
        <div class="formulario-cadastro"> 
            <form action="cadastrar-quadra" method="POST">
                <div class="radio-group">
                    <label>Disponibilidade:</label>
                    <label>
                        <input type="radio" name="disponibilidade" value="disponivel" required> Disponível
                    </label>
                    <label>
                        <input type="radio" name="disponibilidade" value="indisponivel" required> Indisponível
                    </label>
                </div>
                
                <div class="modalidade">
                    <label for="modalidade">Tipo de Modalidade:</label>
                    <select id="modalidade" name="modalidade" required>
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
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" required>
                </div>
                <input type="submit" value="Cadastrar Quadra">
            </form>
        </div>    
    </main>
</body>

</html>