<div class="modal excluir" id="modalExcluir">
            <div class="modal-inner">
                <div class="top-pop-up-excluir">
                    <h3>Deseja realmente excluir esse cadastro? </h3>
                    <a href="#" id="closePopUpExcluir" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Primeiro Nome</label>
                    <input type="text" value="bosta" class="form-control" id="nomeCli" disabled>
                </div>
                <div class="col-md-6">
                    <label for="sobrenomeCli" class="form-label">Sobrenome</label>
                    <input type="text" value="pietrinho" class="form-control" id="sobrenomeCli" disabled>
                </div>
                <div class="buttons">
                    <button type="submit" id="excluirCli" class="deletar">Excluir</button>
                    <button id="closePopUpExcluir" class="bt-cancelar" >Cancelar</button>
                </div>
                </form>
            </div>
        </div>