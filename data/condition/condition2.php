<?php
$point = -30;
if ($point < 0 || $point > 100) {
  $message = 'ポイント値が不正です';
} else {
  $message = 'ポイント値は正常です';
}
?>
<p>メッセージ:<?= $message ?></p>

<?php
$point = '90A';
if (is_numeric($point)) {
  $message = 'ポイント値は数値です';
} else {
  $message = 'ポイント値ではありません';
}
?>
<p>メッセージ:<?= $message ?></p>

<?php
$point = '90A';
if (!is_numeric($point)) {
  $message = 'ポイント値は数値です';
} else {
  $message = 'ポイント値ではありません';
}
?>
<p>メッセージ:<?= $message ?></p>