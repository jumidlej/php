<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      # O switch utiliza o operador de igualdade
      $parametro = true;
      switch ($parametro) {
        case 1:
          echo '1';
          break;
        case '2':
          echo '2';
          break;
        case true:
          echo 'true';
          break;
        default:
          echo 'default';
      }
      
    ?>
  </body>
</html>