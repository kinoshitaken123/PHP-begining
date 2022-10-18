<body>
  <?php
  $colors = [
    'red' => '赤',
    'yellow' => '黄',
    'blue' => '青',
  ];
  foreach ($colors as $key => &$value) {
    $value = 'カラー名:' . $value;
  }
  unset($value);
  ?>
  <pre><?php print_r($colors); ?></pre>
</body>