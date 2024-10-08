<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codigos feitos no SandoBox</title>
</head>
<body>
    <h1>Sandbox</h1>

    <!-- aula 25/44 - Expressões Aritméticas com PHP-->
    <?php 
    $resultado1 = 50 / 2 + 3 ** 2;
    $resultado2 = 50 / (2 + 3) ** 2;
    echo "o resultado de --- 50 / 2 + 3 ** 2 = $resultado1 </br>"; 
    //↳ o resultado de --- 50 / 2 + 3 ** 2 = 34
    echo "o resultado de --- 50 / (2 + 3) ** 2 = $resultado2";
    //↳ o resultado de --- 50 / (2 + 3) ** 2 = 2
    ?>
</body>
</html>