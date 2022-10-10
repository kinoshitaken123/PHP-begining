<body>
  <?php
  $value = 'world';
  // 変数展開
  $combined = "Hello {$value}";
  $combined2 = 'hello';
  $combined2 = $value;
  $combined2 = '!';
  ?>
  <p><?= $combined ?></p>
  <p><?= $combined2 ?></p>
</body>