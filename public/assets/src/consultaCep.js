
/* Adiciona os caracteres padrão do CPF */
$(document).on('input', '#cepCli', function() {
    let cep = $(this).val().replace(/\D/g, '').slice(0,8);
    if (cep.length > 5) {
        cep = cep.replace(/^(\d{5})(\d{1,3})/, '$1-$2');
    }
    $(this).val(cep);
});
console.log('consultaCep carregado');

/* função de limpar os campos */

function limpa_formulario_cep () {
$('#cidadeCli, #ruaCli, #ufCli')
        .val('')
        .prop("readonly", false)
        .removeClass('is-valid is-invalid');
}

/* faz toda a verificação*/

$(document).ready(function() {
    $(document).on('blur', '#cepCli', function() {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep.length === 8) {
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(dados) {
                if (!("erro" in dados)) {
                    $ ('#cepCli')
                        .addClass('is-valid')
                    $('#cidadeCli')
                        .val(dados.localidade)
                        .prop("readonly", true)
                        .removeClass('is-invalid')
                        .addClass('is-valid');
                    $('#ruaCli')
                        .val(dados.logradouro)
                        .prop("readonly", true)
                        .removeClass('is-invalid')
                        .addClass('is-valid');
                    $('#ufCli')
                        .val(dados.uf)
                        .prop("readonly", true)
                        .removeClass('is-invalid')
                        .addClass('is-valid')
                } else {
                    limpa_formulario_cep();
                    $('#cidadeCli, #ruaCli, #ufCli').addClass('is-invalid');
                    alert('CEP não encontrado.');
                }
            });
            $('#ncasaCli').focus();
        } else {
            limpa_formulario_cep();
        }
    });
});