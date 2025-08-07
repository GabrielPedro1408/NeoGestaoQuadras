document.getElementById('modalEditar').addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var agendamentoId = button.getAttribute('data-id');
    document.getElementById('inputIdEditar').value = agendamentoId;

    // Busca os dados via AJAX
    fetch('../PHP/modalAgendamento/getAgendamento.php?id=' + agendamentoId)
        .then(response => response.json())
        .then(data => {
            // Preencha os campos do modal com os dados recebidos
            document.getElementById('cliente').value = data.id_cliente || '';
            document.getElementById('id_quadra').value = data.id_quadra || '';
            document.getElementById('dataAgend').value = data.dt || '';
            document.getElementById('horarioAgend').value = data.horario_agendado || '';
            document.getElementById('horarioFimAgend').value = data.tempo_alocado || '';
            document.getElementById('valorAgend').value = data.valor || '';
            document.getElementById('estadoContaAgend').value = data.estado_conta || '';
        });
});