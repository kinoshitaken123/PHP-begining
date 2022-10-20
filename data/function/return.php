<body>
  <?php
  function add($a, $b)
  {
    if ($a <= 0) {
      echo '引数aは正の数で指定してください。';
      return; //処理終了　戻り値はnull
    }
    if ($b <= 0) {
      echo '引数aは正の数で指定してください。';
      return;
    }
    $total = $a + $b;
    echo '合計は', $total;
    return $total;
  }

  $total = add(5, -5);
  echo $total;
  ?>
</body>