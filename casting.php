<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

      // gettype() => retorna o tipo da variável
      $valor1 = 10.6;
      $valor0 = 0;
      $valor2 = (integer) $valor1;
      $valor3 = (string) $valor2;
      $valor4 = (bool) $valor1;
      $valor5 = (bool) $valor0;
      $valor6 = (integer) false;

      echo $valor1.' '.gettype($valor1);
      echo '<br/>';
      echo $valor2.' '.gettype($valor2);
      echo '<br/>';
      echo $valor3.' '.gettype($valor3);
      echo '<br/>';
      echo $valor4.' '.gettype($valor4);
      echo '<br/>';
      echo $valor5.' '.gettype($valor5);
      echo '<br/>';
      echo $valor6.' '.gettype($valor6);
    ?>
  </body>
</html>