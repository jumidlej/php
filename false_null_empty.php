<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      // false (true/false) - boolean
      // null e empty - valores especiais

      $var1 = null;
      $var2 = '';
      $var3 = false;

      if (is_null($var2)) {
        echo ' empty é null <br/>';
      }
      else {
        echo ' empty não é null <br/>';
      }

      if (empty($var1)) {
        echo ' null é empty <br/>';
      }
      else {
        echo ' null não é empty <br/>';
      }

      if (is_null($var3)) {
        echo ' false é null <br/>';
      }
      else {
        echo ' false não é null <br/>';
      }

      if (empty($var3)) {
        echo ' false é empty <br/>';
      }
      else {
        echo ' false não é empty <br/>';
      }

      if ($var1 == false) {
        echo ' null é false <br/>';
      }
      else {
        echo ' null não é false <br/>';
      }

      if ($var2 == false) {
        echo ' empty é false <br/>';
      }
      else {
        echo ' empty não é false <br/>';
      }
      
    ?>
  </body>
</html>