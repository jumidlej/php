<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      if (true) {
        echo 'Verdadeiro';
      } else {
        echo 'Falso';
      }

      echo '<br/>';

      # == igual
      if (2 == '2') {
        echo "2 == '2' TRUE";
      } else {
        echo "2 == '2' FALSE";
      }

      echo '<br/>';

      # === idêntico
      if (2 === '2') {
        echo "2 === '2' TRUE";
      } else {
        echo "2 === '2' FALSE";
      }
    ?>
    
  </body>
</html>