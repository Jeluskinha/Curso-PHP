$(document).ready(function() {

    // For todays date;
    Date.prototype.today = function () { 
        return ((this.getDate() < 10)?"0":"") + this.getDate() +"/"+(((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ this.getFullYear();
    }

    // Função para retornar a hora atual no formato hh:mm:ss
    Date.prototype.timeNow = function () {
         return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes() +":"+ ((this.getSeconds() < 10)?"0":"") + this.getSeconds();
    }

     // QuerySelector para selecionar o tbody para mais tarde poder jogar para o final da tabela

    // Função para aplicar a cor de status diretamente na linha
    function applyRowColor(row, status) {
        let color = '';
        let width = 'fit-content'
        let size = '12px'
        if (status === 'FINALIZADO') {
            color = '#32CD32'; // Verde claro para Ativo
        } else if (status === 'INICIADA') {
            color = '#87CEFA'; // Vermelho claro para Inativo
        } else if (status === 'PENDENTE') {
            color = '#F08080'; // Amarelo claro para Pendente
        }
        
        // Aplica a cor de fundo diretamente
        $(row).children('td').css({
            'background-color': color,
            'max-width': width,
            'font-size': size
        });
    }

    // Função para criar as linhas na tabela com dados e colunas dinâmicas
    function createTableRows(tableId, data, columns) {
        const tableBody = $(tableId + ' tbody');
        tableBody.empty(); // Limpa as linhas antigas antes de adicionar as novas
        data.forEach(rowData => {
            const row = $('<tr></tr>');
            columns.forEach(col => row.append('<td> ' + rowData[col] + '</td>'));
            //row.append('<td>' + rowData.status + '</td>');
            applyRowColor(row, rowData.status);
            tableBody.append(row);
        });
    }

    // Função para carregar dados de uma URL e preencher uma tabela
    function loadData(url, tableId, columns) {
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                createTableRows(tableId, data, columns);

                //joga a visualização para o final da tabela
                if(tableId == '#table1'){ var tbb = '#tb1'; } else { var tbb = '#tb2'; }
                const tbody = document.querySelector(tbb);
                tbody.scrollTop = tbody.scrollHeight;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Erro ao carregar dados:", textStatus, errorThrown);
            }
        });
    }

    // URLs para os dados das tabelas
    const urlTable1 = '_apis/moagem.php'; // Substitua pela URL da API para Tabela 1
    const urlTable2 = '_apis/mistura.php'; // Substitua pela URL da API para Tabela 2

    var datetime = "LastSync: " + new Date().today() + " - " + new Date().timeNow();
    

    // Função para carregar dados para ambas as tabelas
    function updateTables() {
        loadData(urlTable1, '#table1', ['op', 'lote', 'producao', 'volume','moinho', 'tipo', 'consumo', 'mesh','previsto', 'reprocesso','finos', 'varredura', 'segregado', 'total','po_de_man', 'status', 'perda', 'tirar_fino']);
        loadData(urlTable2, '#table2', ['op', 'lote', 'producao', 'volume', 'tipo', 'consumo', 'mesh','previsto', 'reprocesso', 'varredura', 'pcc_ppro','segregado', 'total', 'gemeas', 'status', 'perda', 'lote_ref', 'op_ref']);

        $("#lastupdate").html("LastSync: " + new Date().today() + " - " + new Date().timeNow());
    }

    // Carregar dados inicialmente e a cada 5 segundos
    updateTables();
    setInterval(updateTables, 5000);

});