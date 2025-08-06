 <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="row g-3" action="" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Alterações do funcionamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="id_abertura" class="form-label">Horário de Abertura</label>
                            <input type="time" class="form-control" id="Abertura" name="aberturaFuncio"> 
                        </div>
                        <div class="col-md-6">
                            <label for="horarioAgend" class="form-label">Horário de Fechamento</label>
                            <input type="time" class="form-control" id="horarioAgend" name="horarioAgend">
                        </div>
                    <div class="col-md-6">
                        <label for="id_intervalo" class="form-label">Intervalo de Tempo</label>
                        <div class="input-intervalo">
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Selecione o Intervalo</option>
                                <option id="op15min" value="1">15 minutos</option>
                                <option id="op30min" value="2">30 minutos</option>
                                <option id="op45min" value="3">45 minutos</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>    
                <div class="modal-footer">
                    <div class="col-12">
                        <button type="submit" name="alteracoes" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>