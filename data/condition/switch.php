<body>
  <?php
  // swith構文は、ゆるやかｎ比較によって値を比較する
  // 変数値によって切り替える条件分岐をコンパクトに書けるのが,switch構文
  $message = '';
  $extension = 'svg';
  switch ($extension) {
    case 'jpg':
      $message = 'jpg画像です。';
      break;
    case 'png':
      $message = 'jpng画像です。';
      break;
    case 'gif':
      $message = 'gif画像です。';
      break;
    case 'bmp':
    case 'svg':
      $message = 'bmpまたはsvg画像です。';
      break;
    default:
      $message = 'その他の形式です';
  }
  ?>
  <p>メッセージ:<?= $message ?></p>
</body>