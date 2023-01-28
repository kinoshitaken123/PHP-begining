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

      //現在日時を元にインスタンスを作る
      $dateTime = new DateTime();
      echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;

      // 現在日時の3時間後のインスタンスを作る
      $dateTime = new DateTime('+3 hours');
      echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;

      // 現在日時でインスタンスを作った後、年月日のみを上書き指定する
      $dateTime = newDateTime();
      $dateTime->setDate(2019,2,25);
      echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;

      // 現在日時でインスタンスを作った後、年月日と時分秒を上書き指定する
      $dataTime = new DateTime();
      $dataTime->setDate(2019, 2 , 25)->setTime(17, 12, 34);
      echo $dataTime->format('Y.m.d H:i:s'). PHP_EOL;

      // 現在日時でインスタンス作成後、年月日と時分秒を上書きを指定する
      echo (new DateTime('2019-02-25 17:12:34'))
          ->modify('+5 days')
          ->modify('+12 hours')
          ->modify('Y.m.d H:i:s'), PHP_EOL;

      // 2019-2-25 17:12:34のインスタンスを作った後に、次の土曜日まで進め、時刻を00:00:00にするs
      echo (new DateTime('2019-02-25 17:12:34'))
          ->modify('Next Saturday')
          ->setTime(0, 0, 0)
          ->format('Y.m.d H:i:s'), PHP_EOL;
      // 2019-02-25　17:1234のインスタンスを作った後、タイムゾーンをUTCに変更して出力する
      $dataTime = new DateTime('2023-01-28 17:12:34');
      $dataTime->setTimezone(new DateTimeZone('UTC'));
      echo $dataTime->format('Y.m.d H:i:s'), PHP_EOL;
  ?>
</body>