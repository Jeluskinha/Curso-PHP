<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $numero = $_GET['num'] ?? 1;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="num">número</label>
      <input type="number" name="num" id="num" value="<?= $numero ?>">
      <input type="submit" value="Calcular Raízes">
    </form>
  </main>
  <section>
    <h2>Resultado final</h2>
    <?php
    $quadrada = $numero ** (1 / 2);
    $cubica = $numero ** (1 / 3);


    $separadorQuadrada = 0;
    $separadorCubica = 0;
    if ((int)$quadrada - $quadrada != 0) {
      $separadorQuadrada = 3;
    }
    if ((int)$cubica - $cubica != 0) {
      $separadorCubica = 3;
    }

    print($separadorQuadrada);

    echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
    echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($quadrada,  $separadorQuadrada, ",", ".") . "</strong></li>";
    echo "<li>A sua raiz cúbida é   <strong>" . number_format($cubica, $separadorCubica, ",", ".") . "</strong></li></ul>"
    ?>
  </section>
</body>

</html>