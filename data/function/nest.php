<body>
  <?php
  function checkoNumber($value)
  {
    return is_numeric($value) && (int)$value > 0;
  }

  function add($a, $b)
  {
    if (!checkoNumber($a) || !checkoNumber($b)) {
      return 'INVALID';
    }
    $total = $a + $b;
    return $total;
  }
  // メインルーチン
  $result = add(3, 10);
  echo "<p>計算結果:{$result}</p>";

  $result = add(5, -4);
  echo "<p>計算結果:{$result}</p>";
  ?>
</body>