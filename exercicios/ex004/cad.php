<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php 
      //var_dump($_POST); // $_POST contém -> $_GET, $_POST, $_COOKIES
      $nome = $_GET["nome"] ?? "sem nome";
      $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; 
                            // ↳ ?? -> operador de coalecência nula, se a variavel vier vazia, o valor a direita será exibido
      echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
  </main>
  
</body>
</html>