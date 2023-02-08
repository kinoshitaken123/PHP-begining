<?php declare(strict_types=1); ?>
<body>
  <?php
      $expireDates = ['2020-01-03', '2021-12-11', '2019-08-20'];
      $newExpireDates = array_map(
        function ($date) {
          return (new DateTime($date))->modify('+ 3years')->format('y-m-d');
        },
        $expireDates
      );
      echo '●newExpireDatesの要素', PHP_EOL;
      print_r($newExpireDates);
  ?>
</body>