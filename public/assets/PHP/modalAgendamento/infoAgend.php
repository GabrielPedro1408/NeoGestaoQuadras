<div class="modal" id="modalInfo">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <div class="nome-cliente"><h3>Informações do <label for="nomeCli">Espeto</label></h3></div>
                    <a href="#" id="closePopUpEditar" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nomeCli"disabled>
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenomeCli"disabled>
                </div>
                <div class="col-md-4">
                    <label for="dataNascCli" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascCli"disabled>
                </div>
                <div class="col-md-4">
                    <label for="cpfCli" class="form-label">CPF</label>
                    <input type="int" class="form-control" id="cpfCli"disabled>
                </div>
                <div class="col-md-4">
                    <label for="rgCli" class="form-label">RG (Registro Geral)</label>
                    <input type="int" class="form-control" id="rgCli"disabled>
                </div>
                <div class="col-md-6">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="int" class="form-control" id="cepCli"disabled>
                </div>
                <div class="col-md-6">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli"disabled>
                </div>
                <div class="col-md-6">
                    <label for="ruaCli" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="ruaCli"disabled>
                </div>
                <div class="col-md-3">
                    <label for="estadoCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoCli"disabled>
                </div>
                <div class="col-md-3">
                    <label for="casaCli" class="form-label">Nº Da Residência</label>
                    <input type="int" class="form-control" id="casaCli"disabled>
                </div>
                <div class="col-md-6">
                    <label for="contatoCli" class="form-label">Contato</label>
                    <input type="int" class="form-control" id="contatoCli"disabled>
                </div>
                <div class="col-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="text" value="" class="form-control" id="emailCli"disabled>
                </div>
                <div class="col-md-12">
                    <label for="descCli" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="descCli"disabled>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Fechar Informações</button>
                </div>
                </form>
            </div>
        </div>