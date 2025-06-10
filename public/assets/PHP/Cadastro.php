<?php
include_once __DIR__ . '/../../assets/PHP/CRUD-Empresa/createEmpresa.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
     <link rel="stylesheet" href="../CSS/cadastro.css">
    <link rel="stylesheet" href="../CSS/fontawesome.min.css">
    <script type="module" src="../JS/cadastro.js"></script>
    <script type="module" src="../JS/bootstrap.bundle.min.js"></script>
    <title>Cadastro Inicial</title>
</head>
<body>
    <header>
            <div class="logotipo">
                <a href="index.php"><img src="../images/financeiro.png" alt="logo-NeoGestão"></a>
                <h4>Neo Gestão</h4>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Entrar</a></li>
                    <li><a href="Cadastro.php">Cadastrar</a></li>
                </ul>
            </nav>
    </header>
        <main>
        <div class="container">

            <div class="form">
                <div class="pagination">
                    <div class="number active">1</div>
                    <div class="bar"></div>
                    <div class="number">2</div>
                    <div class="bar"></div>
                    <div class="number">3 </div>
                </div>
                <div class="form-body">
                    <form class="row g-5" action="login.php" method="POST">
                        <div class="steps">
                            <div class="step active">
                                <h3>Informações da Empresa</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="razaoSocial" class="form-label">Razão social</label>
                                        <input type="text" class="form-control" id="razaoSocial" name="razaoSocial">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emailEmpresa" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailEmpresa" name="emailEmpresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefoneEmpresa" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefoneEmpresa" name="telefoneEmpresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cnpjEmpresa" class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" id="cnpjEmpresa" name="cnpjEmpresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cepEmpresa" class="form-label">CEP</label>
                                        <input type="text" class="form-control" id="cepEmpresa" name="cepEmpresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="numeroEmpresa" class="form-label">Número</label>
                                        <input type="text" class="form-control" id="numeroEmpresa" name="numeroEmpresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cidadeEmpresa" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="cidadeEmpresa" name="cidadeEmpresa">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ruaEmpresa" class="form-label">Rua</label>
                                        <input type="text" class="form-control" id="ruaEmpresa" name="ruaEmpresa">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ufEmpresa" class="form-label">UF</label>
                                        <input type="text" class="form-control" id="ufEmpresa" name="ufEmpresa">
                                    </div>
                                    <div class="col-10">
                                        <button type="button" class="btn btn-primary next" name="cadastrarEmpresa">Próximo</button>
                                    </div>   
                            </div>
                        </div>
                        <div class="step">
                            <h3>Cadastro de Usuário</h3>
                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="usuario" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="senhaUsuario" class="form-label">Senha</label>
                                        <input type="text" class="form-control" id="senhaUsuario" name="senhaUsuario">
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-secondary prev">Voltar</button>
                                        <button type="button" class="btn btn-primary next">Próximo</button>
                                        
                                    </div>
                            </div>    
                        </div>
                        <div class="step">
                            <h3>Finalização</h3>
                            <div class="top-page">
                                <h2>Obrigado Pela Preferência!</h2>
                            </div>
                            <button type="submit" class="btn btn-primary" name="cadastrarUsuario">Concluir Cadastro</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>     
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>