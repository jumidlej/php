<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      $num1 = 4;
      $num2 = 7;

      echo $num1.'+'.$num2.'='.($num1+$num2);
      echo '<br />';
      echo $num1.'-'.$num2.'='.($num1-$num2);
      echo '<br />';
      echo $num1.'*'.$num2.'='.($num1*$num2);
      echo '<br />';
      echo $num1.'/'.$num2.'='.($num1/$num2);
      echo '<br />';
      echo $num1.'%'.$num2.'='.($num1%$num2);
      echo '<br />';
      echo $num1.'+='.$num2.'='.($num1+=$num2);
      echo '<br />';
      echo $num1.'++='.($num1++);
      echo '<br />';
      echo $num1.'--='.($num1--);
      echo '<br />';
      echo '++'.$num1.'='.(++$num1);
      echo '<br />';
      echo '--'.$num1.'='.(--$num1);
    ?>
    
  </body>
</html>