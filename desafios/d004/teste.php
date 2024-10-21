<pre>
<?php

// criando variaveis para armazenar o dia atual(fim), e o historico(inicio) que retorna dados de 7 dias anteriores
$inicio = date("m-d-Y", strtotime("- 7 days"));
$fim = date("m-d-Y");

// URL que vem do banco central em formato JSON com o dado da cotação
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

// Tratando o JSON com json_decode(dados, true), mas antes pegando os dados da URL com file_get_contents(url)
$dados = json_decode(file_get_contents($url), true); // true => Array

// // conferindo como os dados estão retornando, por causa do TRUE deve vir um Array, se fosse FALSE viria um Object
// var_dump($dados);

// acessando o valor da cotação dentro do Array e mostrando na tela
$cotação = $dados['value'][0]['cotacaoCompra'];
echo "A cotação foi $cotação";

?>
</pre>