<?php

declare(strict_types=1); ?>

<body>
  <?php
  $userList = [
    [
      'user_id' => 10001,
      'user_name' => 'Tanaka',
      'age' => 20,
      'prefecture' => 'Osaka',
    ],
    [
      'user_id' => 10002,
      'user_name' => 'Suzuki',
      'age' => 20,
      'prefecture' => 'Tokyo',
    ],
    [
      'user_id' => 10003,
      'user_name' => 'Yamada',
      'age' => 20,
      'prefecture' => 'Fukuoka',
    ]
  ];

  echo '●prefectureキーの取得', PHP_EOL;
  $prefecture = array_column($userList, 'prefecture');
  print_r($prefecture);
  ?>
</body>