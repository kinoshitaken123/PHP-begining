<?php

declare(strict_types=1); ?>

<body>
  <pre>
    <?php
    function add(int $a, int $b, ?string &$errorMessage): int
    {
      if ($a <= 0 || $b <= 0) {
        $errorMessage = '(※エラー:正の整数を指定下さい)';
      }

      $total = $a + $b;
      return $total;
    }
    // メインルーチン
    $errorMessage = null;
    $result = add(3, 10, $errorMessage);
    echo '計算結果:', $result, $errorMessage, PHP_EOL;

    $errorMessage = null;
    $result = add(4, -5, $errorMessage);
    echo '計算結果:', $result, $errorMessage, PHP_EOL;

    // $errorMessage = null;
    // $result = add('4', -5, $errorMessage);
    // echo '計算結果:', $result, $errorMessage, PHP_EOL;
    ?>
  </pre>
</body>