<?php declare(strict_types=1); ?>
<body>
  <?php
      echo '年月日をドット区切りからハイフン区切りに置換する', PHP_EOL; 
      $diary = '2019.03.03 今日は雨が降っています';
      $diary = preg_replace('/([0-9]{4})\.([0-9{2})\.(0-9{2})/u', '${1}-${2}', $diary);
  ?>
</body>