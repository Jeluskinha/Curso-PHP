<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Testes de tipos primitivos - AULA 21/44</h1>
  <?php 
    // //// 0x = hexadecimal, 0b = binário, 0 = Octal 
    // $num=0x1A;
    // echo "o valor da variável é $num";

    //// tipos primitivos do tipo ESCALARES -> string, integer/double/real , float, booleano
    // // testando var_dump()
    // $int = 300;
    // var_dump($int);

    // $float = 45.2;
    // var_dump($float);

    // $bool = true;
    // var_dump($bool);

    // $string = "Jean";
    // var_dump($string);

    // ////
    // $num = 3e2; // 3e2 === 3 x 10² ou 3 * 10(2)
    // //$num = (int) 3e2
    // //echo "O valor é $num";
    // var_dump($num); // sempre que utilizar potências ele considera como Float
    //                 // se eu forçar a variável a ser int declarando -> num = (int) 3e2, var_dump() irá considerar como Integer
    
    // $num = "950";
    // //$num = (int)"950";

    // //$num = (float)"950";
    // //$num = (double)"950";
    // //$num = (real)"950"; // real foi removido do php 7.4

    // //$num = (bool)"950";
    // var_dump($num); // apresentado como -> string(3) "950"
    //                 // se declarada como $num = (int) "950"; -> será convertida para int e apresentado como -> int(950)
    //                 // se declarada como  $num = (float)"950"; -> será convertida para float e apresentado como -> float(950)

    // // cuidados ao utilizar echo ou print para valores booleanos                
    // $teste = true; // será mostrado o valor 1
    // //$teste = false; // não será mostrado valor algum
    // print "valor $teste";               
    // echo "valor $teste";   
    
    //// tipos primitivos do tipo COMPOSTO -> array e Object
    // $vet = [6,2.5,"Maria",3,false];
    // var_dump($vet); 

    // class Pessoa {
    //   private string $nome ;
    // }
    // $pessoa = new Pessoa;
    // var_dump($pessoa);
  ?>
</body>
</html>