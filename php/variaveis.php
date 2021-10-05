<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      $nome = 'Juliana';
      $cor = 'azul';
      $idade = 21;
      echo 'Olá, '.$nome.', vi que sua cor preferida é '.$cor.' e você tem '.$idade.' anos.';
      echo '<br />';
      // aspas duplas são um pouco mais lentas pois fazem verificação de variáveis
      echo "Olá, $nome, vi que sua cor preferida é $cor e você tem $idade anos.";
    
    ?>
    
  </body>
</html>