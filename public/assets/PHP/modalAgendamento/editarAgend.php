<?php 
$quadras = $pdo->query("SELECT id, descr FROM quadras")->fetchAll();
?>
 <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form class="row g-3" action="" method="POST">
                <input type="hidden" id="inputIdEditar" name="id_agendamento" value="">
                <div class="modal-header">
                    <h5 class="modal-title">Alterações do Agendamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="id_cliente" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="cliente" name="clienteAgend" placeholder="Nome"> 
                        </div>
                        <div class="col-md-6">
                            <label for="id_quadra" class="form-label">Quadra Selecionada</label>
                            <select name="id_quadra" id="" class="form-select">
                                <option id="nome_quadra" value="nome_quadra"  selected disabled></option>
                                <?php
                                 foreach($quadras as $quadra): 
                                ?>
                                      <option value=' <?=$quadra['id']?>'><?=$quadra['descr']?></option> 
                                <?php
                                 endforeach; 
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Data do Agendamento</label>
                            <input type="date" class="form-control" id="data_agendamento" name="dataAgend">
                        </div>
                        <div class="col-md-4">
                            <label for="horarioAgend" class="form-label">Horário Início</label>
                            <input type="time" class="form-control" id="horario_agendamento" name="horarioAgend">
                        </div>
                        <div class="col-md-4">
                            <label for="horarioFimAgend" class="form-label">Horário Fim</label>
                            <input type="time" class="form-control" id="horario_fim_agendamento" name="horarioFimAgend">
                        </div>
                        <div class="col-md-6">
                            <label for="valorAgend" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="valor_agendamento" name="valorAgend" placeholder="R$ 00,00" step="0.01" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="estadoContaAgend" class="form-label">Estado da Conta</label>
                            <select name="estadoContaAgend" class="form-select" id="bosta">
                                <option id="estado_conta_agendamento" value="estado_conta_agendamento" selected disabled></option>
                                <option value="1">Pendente</option>
                                <option value="2">Pago</option>
                                <option value="3">Cancelado</option>
                            </select>
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