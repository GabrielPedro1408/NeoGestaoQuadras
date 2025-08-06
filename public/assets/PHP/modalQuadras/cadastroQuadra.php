 <?php 
 include_once __DIR__ . '/../conexao.php';
 include_once __DIR__ . '/CRUD/createQuadras.php';

 ?>
 <!-- cadastro cli -->
    
<div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-left">
      <div class="modal-header">
        <h3 class="modal-title" id="modalCadastroLabel">Cadastro de Quadra</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <form action="" method="POST">
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="nomeQuadra" class="form-label">Nome</label>
              <input type="text" class="form-control" id="descr" name="descr" placeholder="Nome da quadra">
            </div>
            <div class="col-md-6">
                <label for="disponibilidadeQuadra" class="form-label">Disponibilidade</label>
                <select class="form-select" id="disponibilidadeQuadra" name="disponibilidadeQuadra">
                    <option selected disabled>Selecione a disponibilidade</option>
                    <option value="1">Disponível</option>
                    <option value="0">Indisponível</option>
                </select>
            </div>
            <div class="col-md-6">
              <label for="modalidadeQuadra" class="form-label">Modalidade</label>
              <select class="form-select" aria-label="Default select example" name="modalidadeQuadra">
                <option selected disabled>Selecione a modalidade</option>
                <option value="1">Futebol Society</option>
                <option value="2">Futsal</option>
                <option value="3">Vôlei de Praia</option>
                <option value="4">Basquete</option>
                <option value="5">Tênis</option>
                <option value="6">Beach Tennis</option>
                <option value="7">Handebol</option>
                <option value="8">Padel</option>
                <option value="9">Peteca</option>
                <option value="10">Badminton</option>
                <option value="11">Hóquei Indoor</option>
                <option value="12">Futebol de Areia</option>
                <option value="13">Vôlei Indoor</option>
                <option value="14">Basquete 3x3</option>
                <option value="15">Squash</option>
                <option value="16">Futebol Infantil</option>
                <option value="17">Tênis de Mesa</option>
                <option value="18">Pickleball</option>
                <option value="19">Futebol Americano Flag</option>
                <option value="20">Rugby Touch</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="valorhrQuadra" class="form-label">Valor do Agendamento</label>
              <input type="number" class="form-control" id="valoragendQuadra" name="valoragendQuadra" placeholder="Ex: 100.00">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="cadastrar" class="btn btn-primary">Adicionar Quadra</button>
        </div>
      </form>
    </div>
  </div>
</div>