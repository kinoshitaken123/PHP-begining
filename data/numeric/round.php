<?php declare(strict_types=1); ?>
<body>
  <?php  
      $numbers = 987.654;

      echo round($numbers), PHP_EOL;
      echo round($numbers, 1), PHP_EOL;
      echo round($numbers, 2), PHP_EOL;
      echo round($numbers, 3), PHP_EOL;
      echo round($numbers, 4), PHP_EOL;
      echo round($numbers, -1), PHP_EOL;
      echo round($numbers, -2), PHP_EOL;

      echo ceil($numbers), PHP_EOL;
      echo floor($numbers), PHP_EOL;

  ?>
</body>