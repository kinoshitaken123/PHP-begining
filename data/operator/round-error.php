<body>
  <?php
  // 丸め誤差
  $result = floor((0.1 + 0.7) * 10);
  //文字列にキャスト
  $result2 = floor((string)(0.1 + 0.7) * 10);
  //BCMath関数を使って計算する
  $result3 = floor((int)bcmul(bcadd(0.1, 0.7, 2), 10, 2));
  ?>
  <?= $result ?>
  <?= $result2 ?>
  <?= $result3 ?>
</body>