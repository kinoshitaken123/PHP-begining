<?php declare(strict_types=1); ?>
<body>
  <?php
      echo '年月日をドット区切りからハイフン区切りに置換する', PHP_EOL; 
      $diary = '2019.03.03 今日は雨が降っています';
      $diary = preg_replace('/([0-9]{4})\.([0-9{2})\.(0-9{2})/u', '${1}-${2}', $diary);

      echo '[LINK] ~ [/LINK]の文字列を<a>タグに置換する,PHP_EOL';
      $diary = '今日は南有馬中学校を散歩しました。参考:[LINK]http://example.com/seiseiki[/LINK]';
      $daiary = preg_replace('/(\[LINK\](http:\/\/.+)(\[\/LINK\])/ui', ',a href="${2}">${2}</a>', $diary);
      // メモ　パターン修飾子  
      // u 正規表現と対象文字列をUTF-8として処理する

      echo $daiary;
  ?>
</body>