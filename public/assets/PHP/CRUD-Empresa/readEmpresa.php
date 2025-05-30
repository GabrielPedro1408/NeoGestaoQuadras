<?php  
include_once __DIR__ . '/../conexao.php';
include_once __DIR__ . '/CRUD/createAgendamento.php';
?>
    <div class="modal" id="modalCadastro">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Informações do Agendamento</h3>
                    <a href="#" id="closePopUpCadastro" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="" method="POST">
                <div class="col-md-6">
                    <label for="id_cliente" class="form-label">Cliente</label>
                    <select name="id_cliente" id="id_cliente">
                        <?php 
                        $clientes = $pdo->query("SELECT id, nome FROM clientes")-> fetchAll();
                        foreach ($clientes as $cliente){
                            echo "<option value='{$cliente['id']}'> {$cliente['nome']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_quadra" class="form-label">Quadra Agendada</label>
                    <select name="id_quadra" id="id_quadra">
                        <?php 
                        $quadras = $pdo->query("SELECT id, descr FROM quadras")-> fetchAll();
                        foreach($quadras as $quadra){
                            echo "<option value='{$quadra['id']}'>{$quadra['descr']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="dataAgend" class="form-label">Data do Agendamento</label>
                    <input type="date" class="form-control" id="dataAgend" name="dataAgend">
                </div>
                <div class="col-md-4">
                    <label for="horarioAgend" class="form-label">Horário Inicio</label>
                    <input type="int" class="form-control" id="horarioAgend" name="horarioAgend">
                </div>
                <div class="tempo-agendamento col md-4">
                <div class="col-15">
                    <button class="btn btn-primary"> - <label for="tempoLoc">15</label></button>
                </div>
                <div class="col-md-8">
                    <label for="HorarioFimAgend" class="form-label">Tempo do agendamento</label>
                    <input type="int" class="form-control" id="horarioFimAgend" name="horarioFimAgend">
                </div>
                <div class="col-15">
                    <button class="btn btn-primary"> + <label for="tempoLoc">15</label></button>
                </div>
                </div>
                <div class="col-md-6">
                    <label for="valorAgend" class="form-label">Valor</label>
                    <input type="int" class="form-control" id="valorAgend" name="valorAgend">
                </div>
                <div class="col-md-12">
                    <label for="estadoContaAgend" class="form-label">Estado da conta</label>
                    <input type="text" class="form-control" id="estadoContaAgend" name="estadoContaAgend">
                </div>
                <div class="col-12">
                    <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar Agendamento</button>
                </div>
                </form>
            </div>
        </div>
        