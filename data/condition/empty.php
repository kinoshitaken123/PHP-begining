<body>
  <?php
  // あいまいな空欄チェック文字列が空文字と認識されてしまう。
  $value = '0';
  if (!$value) {
    echo '変数は空です', PHP_EOL; //このブロックに入る (誤判定)
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

  <?php
  // 数値「０」は空文字と同じ扱いになる
  $value = 0;
  if ($value == '') {
    echo '変数は空です', PHP_EOL; //このブロックに入る (誤判定)
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

  <?php
  // あいまいな空欄チェック文字列が空文字と認識されてしまう。
  $value = '0';
  if (empty($value)) {
    echo '変数は空です', PHP_EOL; //このブロックに入る (誤判定)
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

  <?php
  // nullは判定できるが,空文字は判定できない
  $value = '0';
  if (empty($value)) {
    echo '変数は空です', PHP_EOL; //このブロックに入る 
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

  <?php
  // 空文字は判定できるが,nullは判定できない
  $value = null;
  if ($value === '') {
    echo '変数は空です', PHP_EOL;
  } else {
    echo '変数は空ではありません', PHP_EOL; //このブロックに入る 
  }
  ?>

  <?php
  // nullは判定できるが,空文字は判定できない
  $value = '';
  if (is_null($value)) {
    echo '変数は空です', PHP_EOL;
  } else {
    echo '変数は空ではありません', PHP_EOL; //このブロックに入る 
  }
  ?>

  <?php
  // 空文字もNULLも正しく判定できる空欄チェック
  $value = null;
  if (is_null($value) || $value === '') {
    echo '変数は空です', PHP_EOL; //このブロックに入る 
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

<?php
  // 空文字もNULLも正しく判定できる空欄チェック
  $value = '';
  if (is_null($value) || $value === '') {
    echo '変数は空です', PHP_EOL; //このブロックに入る 
  } else {
    echo '変数は空ではありません', PHP_EOL;
  }
  ?>

<?php
  // 空文字もNULLも正しく判定できる空欄チェック
  $value = 0;
  if (is_null($value) || $value === '') {
    echo '変数は空です', PHP_EOL; 
  } else {
    echo '変数は空ではありません', PHP_EOL; //このブロックに入る 
  }
  ?>

</body>