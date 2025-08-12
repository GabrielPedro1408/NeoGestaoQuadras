const mapaAcentos = {
    'á': 'a','à': 'a','ã': 'a','â': 'a','é': 'e','è': 'e',
    'ê': 'e','í': 'i','ì': 'i','î': 'i','ó': 'o','ò': 'o',
    'õ': 'o','ô': 'o','ú': 'u','ù': 'u','û': 'u','ç': 'c'
}

let inputField = document.querySelector('input[name=busca]');
var data;

inputField.addEventListener('input', function (e) {
    const busca = e.target.value;
    const res = filtrarPorDescricao(data, busca);
    montarTabela(res);
});

function filtrarPorDescricao(array, termo){
    termo = termo.toLowerCase()
    .replace (/[áàãâéèêíìîóòõôúùûç]/g, (match) => mapaAcentos[match] || match)
    .replace (/[^a-z]/g, '');
    return array.filter(item => {
        let descr = item.descricao.toLowerCase()
        .replace (/[áàãâéèêíìîóòõôúùûç]/g, (match) => mapaAcentos[match] || match)
        .replace (/[^a-z]/g, '');

        const descrEncontrado = descr.toLowerCase().includes(termo);
        return descrEncontrado;
    });
}
const montarTabela = (data) =>{
    let html = '';
    data.map(function(item){  
    function recorrencia (item) {
        switch(item.recorrencia) {
            case 0:
                return "Única";
            case 1:
                return "Semanal";
            case 2:
                return "15 dias";
            case 3:
                return "Mensal";
            case 4:
                return "Anual";
        }
        return recorrencia;
    }
    const formatarData = (dataStr) => {
    const data = new Date(dataStr);
    return data.toLocaleDateString('pt-BR');
};
    function tipo_conta(item) {
        switch(item.tipo_conta) {
        case 0:
            return ' <div class="pagar">Pagar</div>';
        case 1:
            return ' <div class="receber">Receber</div>';
        }
        return ' <div class="nao-definido">Não definido</div>';
    }
    function categoria (item){
        if (item.tipo == 1){
            return "Fornecedor";
        }
        else if (item.tipo == 2){
            return "Funcionário";
        }
        else if (item.tipo == 3){
            return "Cliente";
        }
        else if (item.tipo == 4){
            return "Gasto Fixo";
        }
        else if (item.tipo == 5){
            return "Outros";
        }
        else{
            return "Não definido";
        }
    }
    html += `<tr class="text-center text-align-center">`;
    html += `<td>${item.descricao}</td>`;
    html += `<td> R$${item.valor}</td>`;
    html += `<td>${categoria(item)}</td>`;
    html += `<td>${tipo_conta(item)}</td>`;
    html += `<td>${recorrencia(item)}</td>`;
    html += `<td>${formatarData(item.data_vencimento)}</td>`;
    html += `<td>
                <button  class="btn btn-primary btn-sm">Editar</button>
                <button  class="btn btn-danger btn-sm">Excluir</button>
            </td>`;
    html += `</tr>`;
    });
    document.querySelector('#body_table').innerHTML = html;
}

function pegar_dados(busca){
    let ajax = new XMLHttpRequest();
    ajax.open("GET", `http://localhost/Projeto-TCC/public/assets/PHP/modalFinanceiro/listagemContas/filtragem.php?busca=${busca}`, true);

    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status == 200){
            data = JSON.parse(ajax.responseText);
            montarTabela(data);
        }
    }
    ajax.send();
}
window.onload = () => {
    pegar_dados('');
};