<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      // olhar documentação do PHP para datas e timezones
      // recuperação da data atual
      // essa data é recuperada do SO
      echo date('d/m/Y H:i ');
      echo date_default_timezone_get() . '<br/>';
      date_default_timezone_set('America/Bahia');
      echo date('d/m/Y H:i ');
      echo date_default_timezone_get() . '<br/>';

      // pode setar timezone no php.ini

      $data_inicial = '2018-04-24';
      $data_final = '2018-05-16';

      // timestamp 01/01/1970
      // diferença de SEGUNDOS entre 01/01/1970 - 24/04/2018
      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);

      echo $data_inicial . ' - ' . $time_inicial . '<br/>';
      echo $data_final . ' - ' . $time_final . '<br/>';
      
      $diferenca_times = abs($time_final - $time_inicial);

      echo 'Diferença entre datas finais e iniciais: ' . $diferenca_times . '<br/>';

      $segundos_dia = 24 * 60 * 60;

      $diferenca_dias_datas = $diferenca_times / $segundos_dia;

      echo 'Diferença de dias entre as datas: ' . $diferenca_dias_datas;

    ?>
  </body>
</html>