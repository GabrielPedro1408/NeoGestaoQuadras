

    <div class="modal" id="modalCadastro">
            <div class="modal-inner">
                <div class="top-pop-up">
                    <h3>Informações do Agendamento</h3>
                    <a href="#" id="closePopUpCadastro" ><i class="fa-solid fa-x"></i></a>
                </div>
            <form class="row g-3" action="Clientes.php" method="POST">
                <div class="col-md-6">
                    <label for="nomeCli" class="form-label">Nome Cliente</label>
                    <input type="text" class="form-control" id="nomeCli" name="nomeCli">
                </div>
                <div class="col-md-6">
                    <label for="QuadraAgend" class="form-label">Quadra Agendada</label>
                    <input type="text" class="form-control" id="QuadraAgend" name="QuadraAgend">
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
                    <button class="btn btn-primary">- <label for="tempoLoc">15</label></button>
                </div>
                <div class="col-md-8">
                    <label for="cpfCli" class="form-label">Tempo do agendamento</label>
                    <input type="int" class="form-control" id="horarioFimAgend" name="horarioFimAgend" disabled>
                </div>
                <div class="col-15">
                    <button class="btn btn-primary">+ <label for="tempoLoc">15</label></button>
                </div>
                </div>
                <div class="col-md-6">
                    <label for="valorAgend" class="form-label">Valor</label>
                    <input type="int" class="form-control" id="valorAgend" name="valorAgend">
                </div>
                <div class="col-md-12">
                    <label for="complementoAgend" class="form-label">Complementos</label>
                    <input type="text" class="form-control" id="complementoAgend" name="complementoAgend">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar Agendamento</button>
                </div>
                </form>
            </div>
        </div>