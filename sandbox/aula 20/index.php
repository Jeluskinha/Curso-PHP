<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codigos feitos no SandoBox</title>
</head>
<body>
    <h1>Sandbox</h1>

    <!-- aula 20/44 -->
    <?php  
      // diverença entre variavel e constante
      $nome = "Jean Lucas";
      $sobrenome = "Gomes de Oliveira";
      const PAÍS = "Brasil";
      //
      //
      //
      #PAÍS = "EUA";
      //
      //
      //
      echo "Muito prazer, $nome $sobrenome! Você mora no " . PAÍS;
    
      // teste de variaveis com caracteres especiais
      $valorµ = 200;
      echo "O valor é igual a $valorµ no programa";
     
      // teste de constantes com _
      const _TX = 850;

      echo "Resultado = " . _TX;
     
      // variavel com Camel Case
      $nomeCompletoCliente = "Camel Case";
      $telefone_contato_fornecedor = "Snake Case";
      $nomecursosuoerior = "";
    ?>
</body>
</html>