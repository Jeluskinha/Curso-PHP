<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <!-- Aula 29/44 -->
      <h1>Resultado Final</h1>
      <p>
        <?php 
          $n = $_GET["num"] ?? 0;
          $a = $n -1;
          $s = $n +1;

          echo "O número escolhido foi <strong>$n</strong>";
          echo "<br> o seu <em>antecessor</em> é $a";
          echo "<br> o seu <em>sucessor</em> é $s";
        ?>
      </p>
      <!-- para colocar emogi no HTML-->
      <!-- a introdução ao unicode é (&#x), em seguida o código do emogi (2B05)-->
      <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
      <!-- <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button> -->
      <!-- ↳ os 2 onclick acima são as formas de navegar para a página anterior -->
    </main>
</body>
</html>