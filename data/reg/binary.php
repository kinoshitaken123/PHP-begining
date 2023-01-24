<?php declare(strict_types=1); ?>
<body>
  <?php  
    $word = '奥多摩';
    echo '奥多摩を16進数表現に変換します・', PHP_EOL;
    echo bin2hex($word);

    $binary = 'e7aeddjdsk0b7';
    echo 'e7aeddjdsk0b7の16進数表現をデコードします・', PHP_EOL;
    echo hex2bin($binary), PHP_EOL;
  ?>
</body>