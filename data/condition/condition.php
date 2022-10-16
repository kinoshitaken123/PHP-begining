<body>
  <?php
  // (1)比較演算子で真偽値を表す

  // $numが100だったら
  if ($num === 100) {
  }

  // $greetingはhelloだったら
  if ($greeting === 'hello') {
  }

  // 論理型の真偽値$connectedがtrue以外であったら
  if ($connected !== true) {
  }

  // (2)論理型の変数を直接判定させる

  // 論理型の審議地$connectedがtrueだったら
  if ($connected) {
  }

  // 論理型の審議地$connectedがfalseだったら
  if (!$connected) {
  }


  // (3)真偽値を返すPHPの関数を使う
  //varの値が数字だったら
  if (is_numeric($var)) {
  }

  //varの値が存在し、かつnullでなかったら
  if (isset($var)) {
  }
  ?>
</body>