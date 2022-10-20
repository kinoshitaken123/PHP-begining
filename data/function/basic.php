<body>
  <pre>
    <?php
      function add($a, $b) {
        $total = $a + $b;
        return $total;
      }
      //メインルーチン
      // プログラム実行時に必ず実行される、プログラムの幹となる処理（メイン処理）
      // サブルーチン
      // 関数のようにコールされない限り実行されないサブルーチンがある
      // 言い換えるならば、全てのプログラム行からサブルーチンを除いたものがサブルーチン
      $result = add(3, 10);
      echo '計算結果:', $result, PHP_EOL;

      $result = add(2, 5);
      echo '計算結果:', $result, PHP_EOL;
    ?>
  </pre>
</body>