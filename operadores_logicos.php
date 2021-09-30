<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      # estrutura condicional
      if (true) {
        echo 'Verdadeiro';
      } else {
        echo 'Falso';
      }

      # E: AND &&
      # OU: OR ||
      # XOR: XOR
      # NÃO: |

      echo '<br/>';

      # == igual
      if (2 == '2' AND 2 < 4) {
        echo "'2 == '2' AND 2 < 4' TRUE";
      } else {
        echo "'2 == '2' AND 2 < 4' FALSE";
      }

      echo '<br/>';

      # === idêntico
      if (2 === '2' OR 2 < 4) {
        echo "'2 === '2' OR 2 < 4' TRUE";
      } else {
        echo "'2 === '2' OR 2 < 4' FALSE";
      }

      echo '<br/>';

      # === idêntico
      if (2 === '2' XOR 2 < 4) {
        echo "'2 === '2' XOR 2 < 4' TRUE";
      } else {
        echo "'2 === '2' XOR 2 < 4' FALSE";
      }
    ?>
    
  </body>
</html>