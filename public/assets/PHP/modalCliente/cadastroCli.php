 <!-- cadastro cli -->
    <?php 
    include_once __DIR__ . '/CRUD/createCliente.php';
    ?>
    <div class="modal" id="modalCadastro">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Cadastro de Cliente</h3>
                    <a href="#" id="closePopUpCadastro" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nomeCli" name="nomeCli">
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenomeCli" name="sobrenomeCli">
                </div>
                <div class="col-md-4">
                    <label for="dataNascCli" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascCli" name="dataNascCli">
                </div>
                <div class="col-md-4">
                    <label for="cpfCli" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpfCli" name="cpfCli">
                </div>
                <div class="col-md-4">
                    <label for="rgCli" class="form-label">RG (Registro Geral)</label>
                    <input type="text" class="form-control" id="rgCli" name="rgCli">
                </div>
                <div class="col-md-6">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cepCli" name="cepCli">
                </div>
                <div class="col-md-6">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli" name="cidadeCli">
                </div>
                <div class="col-md-6">
                    <label for="ruaCli" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="ruaCli" name="ruaCli">
                </div>
                <div class="col-md-3">
                    <label for="ufCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="ufCli" name="ufCli">
                </div>
                <div class="col-md-3">
                    <label for="ncasaCli" class="form-label">Nº Da Residência</label>
                    <input type="text" class="form-control" id="ncasaCli" name="ncasaCli">
                </div>
                <div class="col-md-6">
                    <label for="celularCli" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celularCli" name="celularCli">
                </div>
                <div class="col-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="email" class="form-control" name="emailCli" id="emailCli">
                </div>
                <div class="col-md-12">
                    <label for="complementocasaCli" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="complementocasaCli" name="complementocasaCli">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
                </div>
                </form>
            </div>
        </div> 
