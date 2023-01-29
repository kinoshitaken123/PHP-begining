<?php declare(strict_types=1); ?>
  <body>
    <?php   
      date_default_timezone_set('Asia/Tokyo');
      $date = new DateTime('2019-02-15 17:12:34');

      echo $date->format('Y.m.d H:i:s'), PHP_EOL;
      echo $date->format('Y.m.d H:i'), PHP_EOL;
      echo $date->format('Y年m月d日(D) H時i分'), PHP_EOL;
      // その月の日数
      echo $date->format('Y.m.t'), PHP_EOL;
      echo $date->format('U'), PHP_EOL; // UNIXタイム

      // 協定世界時（UTC）にタイムゾーンを変更する
      $date->setTimezone(new DateTimeZone('UTC'));
      echo $date->format('Y.m.d H:i:s');
    ?>
  </body>