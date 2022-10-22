<?php

declare(strict_types=1); ?>

<body>
  <?php
  // 可変長引数は最後の引数でしか使用できない
  // スカラー型の引数をいくつでも受け取り可能
  function add(string $header, int ...$numbers): string
  {
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $header . $total;
  }

  $result = add('計算結果:', 3, 2, 9, 1);
  echo $result;
  ?>
</body>