<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

      // função do tipo void
      function exibirBoasVindas($nome) {
        echo "Olá, ".$nome."<br/>";
      }

      exibirBoasVindas('Juliana');

      // função com retorno
      function calcularAreaTerreno($largura, $comprimento) {
        $largura += 10;
        return $largura * $comprimento;
      }
      
      $largura = 10;
      echo calcularAreaTerreno($largura, 30)."<br/>";
      echo $largura;

    ?>
  </body>
</html>