<?php declare(strict_types=1); ?>
<body>
  <?php 
    $sentence = '今日は、良い日です';
    var_dump(mb_strpos($sentence, '日'));

    if (mb_strpos($sentence, '日')) {
      echo '引数$sentenceの中に「日」は見つかりました。', PHP_EOL;
    } else {
      echo '引数$sentenceの中に「日」は見つかりませんでした。', PHP_EOL;
    }
  ?>
</body>