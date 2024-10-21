 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Desafio PHP</title>
   <link rel="stylesheet" href="style.css">
 </head>

 <body>
   <main>
     <!-- Aula 31/44 -->
     <h1>Conversor de Moedas</h1>
     <?php
         //Cotação vinda da API do Banco Central
         $inicio = date("m-d-Y", strtotime("- 7 days"));
         $fim = date("m-d-Y");

         // URL que vem do banco central em formato JSON com o dado da cotação
         $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

         // Tratando o JSON com json_decode(dados, true), mas antes pegando os dados da URL com file_get_contents(url)
         $dados = json_decode(file_get_contents($url), true); // true => Array

         // acessando o valor da cotação dentro do Array e mostrando na tela
         $cotação = $dados['value'][0]['cotacaoCompra'];

         //----------------------------------------------------------------//

         //Quanto $$ você tem?
         $real =  $_REQUEST['din'] ?: null;

         //Equivalência em dólar
         $dólar = $real / $cotação;

         // //Mostrar o resultado
         // // JEITO TRADICIONAL DE CONVERTER MOEDAS
         // echo "Seus R\$" . number_format($real, 2, ",",".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".");


         // JEITO PROFISSIONAL DE CONTERTER MOEDAS - com internacionalização
         $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

         echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
         ?>
     <button onclick="javascript:history.go(-1)">Voltar</button>
   </main>
 </body>

 </html>