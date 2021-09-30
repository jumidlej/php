<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

      $num = -7.5;

      echo ceil($num) . "<br />";
      echo floor($num) . "<br />";
      // .5 => cima
      echo round($num) . "<br />";
      echo sqrt($num) . "<br />";
      echo rand(10, 20) . "<br />"; // 0 até randmax
      echo getrandmax();

    ?>
  </body>
</html>