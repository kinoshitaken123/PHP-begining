<body>
  <pre>
    <?php
    function checkNumber($value)
    {
      // is_numeric — 変数が数字または数値形式の文字列であるかを調べる
      return is_numeric($value) && (int)$value > 0;
    }

    function add($a, $b, &$errorMessage)
    {
      if (!checkNumber($a)) {
        $a = 0;
        $errorMessage = '(※エラー:1番目の引数が整数ではありません)';
      }

      if (!checkNumber($b)) {
        $b = 0;
        $errorMessage = '(※エラー:2番目の引数が整数ではありません)';
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
    ?>
  </pre>
</body>