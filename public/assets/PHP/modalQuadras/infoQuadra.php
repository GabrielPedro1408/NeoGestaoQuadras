<div class="modal" id="modalInfo">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <div class="nome-cliente"><h3>Informações do <label for="nomeCli">Espeto</label></h3></div>
                    <a href="#" id="closePopUpEditar" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Quadras.php" method="POST">
            <div class="col-md-6">
                    <label for="nomeQuadra" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeQuadra" name="nomeQuadra" disabled>
                </div>
                <div class="col-md-6">
                    <label for="disponibilidadeQuadra" class="form-label">Disponibilidade</label>
                    <input type="text" class="form-control" id="disponibilidadeQuadra" name="disponibilidadeQuadra" disabled>
                </div>
                <div class="col-md-6">
                    <label for="modalidadeinfo">Modalidade</label>
                    <select disabled name="modalidadeinfo" class="form-select" aria-label="Default select example">
                        <option selected><label for="modalidade">Futebol Society</label></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="valorhrQuadra" class="form-label">Valor do Agendamento</label>
                    <input type="int" class="form-control" name="ValorAgendQuadra" id="valoragendQuadra"disabled>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Fechar</button>
                </div>
                </form>
            </div>
        </div>