<body>
  <?php
  $numbers = [3, 5, -1, 2];
  foreach ($numbers as $number) {
    if ($number < 0) {
      $number = 0;
    }
  }
  // ループ処理が終わった後は、必ずunset命令でリファレンスを削除
  unset($number);
  ?>
  <pre><?php print_r($numbers); ?></pre>
</body>