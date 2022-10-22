<body>
  <?php

  $num1 = 3;
  $num1 = 10;

  function add()
  {
    global $num1, $num2;
    return $num1 + $num2;
  }

  //メインルーチン
  $result = add($num1, $num2);
  echo $result;
  ?>
</body>