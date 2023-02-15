<?php declare(strict_types=1); ?>
<body>
  <?php
    $prices = [200, 3100, '150', 2500, 90]; 

    echo '配列値で昇順ソートする', PHP_EOL;
    sort($prices);
    print_r($prices);

    echo '配列値で降順ソートする', PHP_EOL;
    rsort($prices);
    print_r($prices);

    echo '配列値を文字列として昇順ソートする', PHP_EOL;
    sort($prices, SORT_STRING);
    print_r($prices);
  ?>
</body>