<?php
$arr3 = [
  'a' => 'value A',
  'b' => 'value B',
];

$arr4 = [
  'a' => 'value C',
  'b' => 'value D',
  'c' => 'value E',
];
$mergedE = $arr3 + $arr4;
$mergedF = $arr4 + $arr3;
$mergedG = array_merge($arr3, $arr4);
$mergedH = array_merge($arr4, $arr3);
?>
<p>配列の合成結果</p>
merged E: <?php print_r($mergedE) ?><br>
merged F: <?php print_r($mergedF) ?><br>
merged G: <?php print_r($mergedG) ?><br>
merged H: <?php print_r($mergedH) ?><br>