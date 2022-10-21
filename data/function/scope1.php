<?php /* 本プログラムは期待通りに動作しません*/ ?>

<body>
  <?php

  $num1 = 10;

  function add($a, $b)
  {
    echo '$num1を出力します:', $num1;
  }

  //メインルーチン
  $result = add($num1, $num2);
  echo '$aを出力します:', $a;
  ?>
</body>