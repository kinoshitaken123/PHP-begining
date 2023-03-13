<?php declare(strict_types=1); ?>
<body>
  <?php  
      echo '●flower.phpをコピーしてflower-copy.pngを作ります。', PHP_EOL;
      copy('./files/flower.png', './files/flower-copy1.png');

      echo '●flower.phpをコピーしてflower-copy.pngをリネームします。', PHP_EOL;
      rename('./files/flower-copy1.png', './files/flower-rename1.png');

      echo '●flower.phpをコピーしてflower-copy.pngを作ります。', PHP_EOL;
      unlink('./files/flower-rename1.png');
  ?>
</body>