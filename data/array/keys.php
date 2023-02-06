<?php declare(strict_types=1); ?>
<body>
  $user = [
    'name' => 'Tanaka',
    'age' => '20',
    'prefecture' => 'Osaka',
    'hobbies' => ['魚釣り', '読書', '作詞']
  ];

  echo '●連想配列のキーのみを取得する', PHP_EOL;
  array_keys($user); 
  print_r($keys);

  echo '●連想配列のキーうち、値として文字列データ型の「20」を持つもののみを取得', PHP_EOL;
  $keys = array_keys($user, '20', true);
  print_r($keys);

  echo '●連想配列の値のみを取得', PHP_EOL;
  $values = array_values($user);
  print_r($values);
</body>