<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codigos feitos no SandoBox</title>
</head>
<body>
    <h1>Sandbox</h1>
  
    <!-- aula 26/44 - Funções Aritméticas do PHP -->
    <?php 
    // valor absoluto / abs() -> retira o sinal (-), mostra apenas o valor
    $valor = -2000;
    $resposta = abs($valor);
    print("O valor absoluto $valor é $resposta");
    //↳ print -> O valor absoluto -2000 é 2000

    // // // // // // // // // // // // // // // // //

    // conversor de bases / base_convert(valor, de, para) -> 
      // ↳ recebe 3 parâmetros - 1° valor, 2° base original, 3° base que será convertida  
      // ↳ converte valores binários, octais e hexadecimais

    $valor = 254;
    $baseAtual = 10;
    $baseNovaDec = 8; //decimal 
    $baseNovaHex = 16; //Hexadecimal === sempre numero 16
    $baseNovaBin = 2; //Binário === sempre numero 2

    $resposta = base_convert($valor, $baseAtual, $baseNovaBin);
    print("O resultado da conversão é $resposta");
    //↳ print -> O resultado da conversão é 11111110

    // // // // // // // // // // // // // // // // //

    //divisão inteira / intdiv() -> mostra apenas o resultado da divisão
    $numerador = 5;
    $denominador  = 2;
    $resposta = intdiv($numerador, $denominador);
                 // ↳ recebe 2 parâmetros - 1° numerador, 2°denominador 
    print("o resultado da divisão inteira de $numerador por $denominador é igual a $resposta </br>");

    //OBS: se eu quiser somente o resto da divisão devo usar o % diretamente ↓↓
    $respostaResto = $numerador % $denominador;
    //↳ o resultado da divisão inteira de 5 por 2 é igual a 2
    
    print("o resto da divisão de $numerador por $denominador é igual a $respostaResto");
    //↳ print -> o resto da divisão de 5 por 2 é igual a 1
    
    // // // // // // // // // // // // // // // // //

    //mínimo / min() -> mostra o valor mínimo de uma sequência
    $valor1 = 5;
    $valor2 = 2;
    $sequencia = min($valor1 , $valor2);

    print("o valor mínimo entre $valor1 e $valor2 é $sequencia </br>");
    //↳ print -> o valor mínimo entre 5 e 2 é 2

    // --------------------------------------- // 

    //máximo / max() -> mostra o valor máximo de uma sequência
    $valor1 = 5;
    $valor2 = 2;
    $sequencia = max($valor1 , $valor2);

    print("o valor máximo entre $valor1 e $valor2 é $sequencia </br>");
    //↳ print -> o valor máximo entre 5 e 2 é 5

    //OBS: o numero de argumentos é ilimitado, utilizei apenas 2 para fins didáticos.

    // // // // // // // // // // // // // // // // //

    //pi / pi() -> invoca o valor de "pi" caso eu precise 
    $pi = pi();
    print("o valor de pi é $pi</br>");
    //↳ print -> o valor de pi é 3.1415926535898

    // ou podemos usar a Constante M_PI ↓
    $pi2 = M_PI; // variavel interna do PHP que já contem o valor de pi
    print("o valor de pi é $pi2</br>");
    //↳ print -> o valor de pi é 3.1415926535898
    
    // // // // // // // // // // // // // // // // //

    //potências / pow() -> nas versões inveriores a 5.60 era o unico meio de se calcular potências. Atualmente podemos usar os operadoes -> **
    $valor1 = 5;
    $valor2 = 2;
    $resultadoPotencia = pow($valor1 , $valor2);
    print("o resultado da potência de $valor1 e $valor2 é $resultadoPotencia</br>");
    //↳ print -> o resultado da potência de 5 e 2 é 25
    
    // // // // // // // // // // // // // // // // //

    //raíz quadrada / sqrt() -> retorna a raíz quadrada de um valor
    $valor = 81;
    $raizQuadrada = sqrt($valor);
    print("A Ráiz quadrada de $valor é $raizQuadrada </br>");
    //↳ print -> A Ráiz quadrada de 81 é 9

    //calcular raíz usando potência
    $valorQuadrado = 81;
    $valorCubico = 27;
    $raizQuadrada = $valorQuadrado ** (1/2); // usando potência e dividindo por 2
    $raizCubica = $valorCubico ** (1/3); // usando potência e dividindo por 3
    print("A Ráiz quadrada de $valorQuadrado é $raizQuadrada </br>");
    print("A Ráiz Cubica de $valorCubico é $raizCubica </br>"); 
    ?>
</body>
</html>