<body>
  <?php
  function add($a)
  {
    $a += 10;
  }
  $argument = 5;
  add($argument);
  echo '$argumentは', $argument, 'です。';
  ?>
</body>