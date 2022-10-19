<body>
  <pre>
    <?php
    // ・ループを強制的に抜ける　break命令
    
    // ・ループ処理途中で強制的に次回のループに移行する　continue命令
    $total = 0;
    $numbers = [10, 2, -5, 3, 'abc', 6, 1];
    echo '正の数を対象に配列の要素数を足し算します...', PHP_EOL;
    foreach ($numbers as $number) {
      if (!is_numeric($number)) {
        echo "数値ではない値を検出したため計算を中断します...(対象値:{$number})", PHP_EOL;
        break;
      }
      if ($number < 0) {
        echo "マイナス値は計算しません...(対象値:{$number})", PHP_EOL;
        continue;
      }
      $total += $number;
    }
    echo "■合計:{$total}", PHP_EOL;
    ?>
  </pre>
</body>