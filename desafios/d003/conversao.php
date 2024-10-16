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
            //Cotação copiada do Goole
            $cotação = 5.17;

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