<?php declare(strict_types=1); ?>
<body>
  <?php
    $today = '2019-03-16';
    $dataElements = explode('-', $today);  
    print_r($dataElements);

    list($year, $month, $day) = explode('-', $today);
    echo '年:', $year, PHP_EOL;
    echo '月:', $month, PHP_EOL;
    echo '日:', $day, PHP_EOL;
  ?>
</body>