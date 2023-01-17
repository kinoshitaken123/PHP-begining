<?php declare(strict_types=1); ?>
<body>
  <?php
      // URL上問題ない文字列
      echo 'TestStringをURLエンコードします。', PHP_EOL;
      $encoded = urldecode('TestString');
      echo $encoded, PHP_EOL;
      $decoded = urldecode($encoded);
      echo $decoded, PHP_EOL;

      // 日本語はＵＲＬに含まれることが出来ない
      echo '東京都杉並区をURLエンコードします。', PHP_EOL;
      $encoded = urldecode('東京都杉並区');
      echo $encoded, PHP_EOL;
      $decoded = urldecode($encoded);
      echo $decoded, PHP_EOL;

      // 一部の半角記号もURLに含めることが出来ない
      echo 'Mark Of !?(^^)をURLエンコードします', PHP_EOL;
      $encoded = urldecode('Mark Of !?(^^)');
      echo $encoded, PHP_EOL;
      $decoded = urldecode($encoded);
      echo $decoded, PHP_EOL;
  ?>
</body>