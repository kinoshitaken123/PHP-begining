<?php declare(strict_types=1); ?>
<body>
  <?php  
      date_default_timezone_set('Asia/Tokyo');
      echo '現在の日時:', date('Y-m-d H:i:s'), PHP_EOL;

      // 日時指定でインスタンスを作る
      $dateTime = newDateTime('2019-02-25 17:12:34');
      echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;
      // インスタンスを変数として保存する必要がなければ、以下のように1ステップでも出力する
      echo (new DateTime('2019-02-25 17:12:34'))->format('Y.m.d H:i:s'), PHP_EOL;

      $dateTime = new DateTime();
      echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;
  ?>
</body>