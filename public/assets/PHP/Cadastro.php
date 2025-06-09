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
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-building"></i></span>
                                            <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="Ex: NeoGestão Ltda">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emailEmpresa" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" id="emailEmpresa" name="emailEmpresa" placeholder="Ex: contato@empresa.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefoneEmpresa" class="form-label">Telefone</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" id="telefoneEmpresa" name="telefoneEmpresa" placeholder="Ex: (11) 91234-5678">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cnpjEmpresa" class="form-label">CNPJ</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" id="cnpjEmpresa" name="cnpjEmpresa" placeholder="Ex: 12.345.678/0001-99">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cepEmpresa" class="form-label">CEP</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-pin"></i></span>
                                            <input type="text" class="form-control" id="cepEmpresa" name="cepEmpresa" placeholder="Ex: 12345-678">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="numeroEmpresa" class="form-label">Número</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-hashtag"></i></span>
                                            <input type="text" class="form-control" id="numeroEmpresa" name="numeroEmpresa" placeholder="Ex: 123">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cidadeEmpresa" class="form-label">Cidade</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-city"></i></span>
                                            <input type="text" class="form-control" id="cidadeEmpresa" name="cidadeEmpresa" placeholder="Ex: São Paulo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ruaEmpresa" class="form-label">Rua</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-road"></i></span>
                                            <input type="text" class="form-control" id="ruaEmpresa" name="ruaEmpresa" placeholder="Ex: Av. Paulista">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ufEmpresa" class="form-label">UF</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-flag"></i></span>
                                            <input type="text" class="form-control" id="ufEmpresa" name="ufEmpresa" placeholder="Ex: SP">
                                        </div>
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
                                        <label for="usuario" class="form-label">Usuário</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ex: joaosilva">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="senhaUsuario" class="form-label">Senha</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            <input type="text" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Ex: ********">
                                        </div>
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
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>