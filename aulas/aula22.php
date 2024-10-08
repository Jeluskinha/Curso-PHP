<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codigos feitos durante as Aulas</title>
</head>
<body>
    <h1>Aula 22/44</h1>
    <?php 
    // //testando interpolação com aspas simples e duplas
    // $nome = "Jean Lucas";
    // $sobrenome = "Gomes de Oliveia";
    // //aspas duplas ""
    // echo "$nome $sobrenome \u{1F680}🚀";
    // //aspas simples ''
    // echo '$nome $sobrenome \u{1F680}';

    // //tesando CONSTANTES
    // const CANAL = "Curso em vídeo \u{1F499}";
    // //não funciona porque CONSTANTES não tem o $, ela é lida como string nesse caso
    // echo "eu assisto o CANAL";
    // // é preciso fazer concatenação para funcionar
    // echo "eu assisto o " . CANAL;

    // //testando o ano atual
    // //não funciona - interpolar
    // echo "Estamos no ano de date('Y')";
    // //funciona -concatenar
    // echo "Estamos no ano de " . date('Y');

    // // testando interpolação com string
    // $nom = "Rodrigo";
    // $snom = "Nogueira";
    // // usar \ -> se chama "sequência de escape". 
    // echo "$nom \"Minotauro\" $snom";
    // // ↳ Rodrigo "Minotauro" Nogueira 

    // // sequencias de Scape
    // $nome = "Gustavo";
    // $sobrenome = "Guanabara";
    // $apelido = "Gafanhoto";
    // echo "$nome $apelido $ sobrenome";
    // // ↳ se eu quiser colocar aspas simples no meio do texto, basta digitar '' sem problemas
    // echo "$nome \"$apelido\" $sobrenome";
    // // ↳ mas se eu quiser colocar aspas duplas no meio do texto, é preciso colocar \ antes de cada uma das aspas

    // // as sequencias de Scape abaixo não funcionou no VSCODE...
    //   // ↳ funcionou no sandobox porque ele desabilitou o HTML e ativou o modo Textarea
    // echo "$nome \t \"$apelido\" \t$sobrenome";
    // // ↳ TABULAÇÃO -> \t aplica o espaço de um TAB na string - 0bs: não funcionou no VSCODE
    // echo "$nome \n \"$apelido\" \n $sobrenome";
    // // ↳ QUEBRA DE LINHA -> coloca a sequencia da string na linha de baixo

    // //formato de string - Heredoc
    //   // ↳ perite texos em varias linhas 
    //   // ↳ tem interpretação de valores  
    //   // ↳ tem características de "aspas duplas" 
    // $curso = "PHP";
    // $ano = date('Y');
    // echo <<< FRASE
    //     Estou estudando
    //       $curso em $ano
    // FRASE;
    // // ↳ será exibido a string-> Estou estudando PHP em 2024 

    // //formato de string - Nowdoc
    //   // ↳ perite texos em varias linhas 
    //   // ↳ tem interpretação de valores  
    //   // ↳ tem características de "aspas duplas" 
    // $curso = "PHP";
    // $ano = date('Y');
    // echo <<< 'FRASE'
    //     Estou estudando
    //       $curso em $ano
    // FRASE;
    //   // ↳ será exibido a string-> Estou estudando $curso em $ano
    ?>
</body>
</html>