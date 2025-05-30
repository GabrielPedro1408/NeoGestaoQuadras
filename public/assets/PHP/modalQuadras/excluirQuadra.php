<div class="modal excluir" id="modalExcluir">
            <div class="modal-inner">
                <div class="top-pop-up-excluir">
                    <h3>Deseja realmente excluir esse cadastro? </h3>
                    <a href="#" id="closePopUpExcluir" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Quadras.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeQuadra" class="form-label">Nome</label>
                    <input type="text" value="Quadra 1" class="form-control" id="nomeQuadra" name="nomeQuadra" disabled>
                </div>
                <div class="col-md-4">
                    <label for="modalidadeQuadra" class="form-label">Modalidade</label>
                    <input type="checkbox" class="form-control" id="modalidadeQuadra" name="modalidadeQuadra" disabled>
                </div>
                <div class="buttons">
                    <button type="submit" id="excluirQuadra" class="deletar">Excluir</button>
                    <button id="closePopUpExcluir" class="bt-cancelar" >Cancelar</button>
                </div>
                </form>
            </div>
        </div>