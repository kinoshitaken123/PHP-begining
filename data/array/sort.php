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

    $files = ['imagel.png', 'image105.png', 'image2.png', 'image3.png', 'image44.png'];
    echo '配列値で自然順ソートする', PHP_EOL;
    sort($files, SORT_NATURAL);
    print_r($files);

    $items = [
      100001 => '掃除機',
      100002 => 'エアコン',
      100003 => 'PC',
      100004 => 'テレビ',
    ];

    echo '連想配列キーの降順でソートする', PHP_EOL;
    ksort($items);
    print_r($items);

  ?>
</body>