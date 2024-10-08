<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    // aula 18/44
        date_default_timezone_set('America/Sao_Paulo'); //GMT-3
        echo "Hoje é dia " . date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s T");
    ?>

    
    <!-- <?
    // teste short tags aula 19/44 -> 9:10
        date_default_timezone_set('America/Sao_Paulo'); //GMT-3
        echo "Hoje é dia " . date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s T");
    ?> código comentado --> 

    <?php 
        $valor = "";
    ?>
</body>

</html> 
    