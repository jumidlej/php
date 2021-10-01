<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      # while
      $num = 1;
      while($num < 10) {
        echo $num . ' ';
        $num += 2;
        continue;
        $num += 100;
        // break;
      }
    ?>
    
  </body>
</html>