<div class="modal fade" id="modalExcluir" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form class="row g-3" action="modalAgendamento/CRUD/processDelete.php" method="POST">
                <input type="hidden" id="inputIdExcluir" name="id_agendamento" value="">
                <div class="modal-header">
                    <h5 class="modal-title">Exlusão do Agendamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h6>Deseja realmete excluir este agendamento?</h6>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nome_cliente_del" class="form-label">Nome</label>
                            <input type="text" name="nome_cliente_del" id="nome_cliente_del" class="form-control"
                                disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="sobrenome_cliente_del" class="form-label">Sobrenome</label>
                            <input type="text" name="sobrenome_cliente_del" id="sobrenome_cliente_del"
                                class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                        <button type="submit" name="exclusão" class="btn btn-primary">Excluir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>