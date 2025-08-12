document.getElementById('modalEditar').addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var agendamentoId = button.getAttribute('data-id');
    document.getElementById('inputIdEditar').value = agendamentoId;

    // Busca os dados via AJAX
    fetch('./modalAgendamento/CRUD/updateAgendamento.php?id=' + agendamentoId)
        .then(response => response.json())
        .then(data => {
            // Preenche os campos do modal com os dados recebidos
            document.getElementById('cliente').value = data.nome_cliente || '';
            document.getElementById('nome_quadra').textContent = data.nome_quadra || '';
            document.getElementById('data_agendamento').value = data.dt || '';
            document.getElementById('horario_agendamento').value = data.horario_agendado || '';
            document.getElementById('horario_fim_agendamento').value = data.tempo_alocado || '';
            document.getElementById('valor_agendamento').value = data.valor || '';
            document.getElementById('estado_conta_agendamento').textContent = data.estado_conta || 'selecione uma opção';
        });
});