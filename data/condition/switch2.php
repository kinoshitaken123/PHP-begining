<body>
  <?php
  // breakの省略すると、その後のcase文の処理も実行されてしまう
  $number = 1;
  switch ($number) {
    case 0:
      echo 'number=0の処理<br>';
    case 1:
      echo 'number=1の処理<br>';
    case 2:
      echo 'number=2の処理<br>';
    default:
      echo 'defaultの処理<br>';
  }
  ?>
</body>