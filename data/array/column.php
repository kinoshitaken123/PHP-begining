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

  echo '●prefectureキーの取得し、戻り値のキーはuser_idとする', PHP_EOL;
  $prefecture = array_column($userList, 'prefecture', 'user_id');
  print_r($prefecture);

  echo '●全てのキーを取得し、戻り値のキーはuser_idとする', PHP_EOL;
  $prefecture = array_column($userList, 'null', 'user_id');
  print_r($prefecture);
  ?>
</body>