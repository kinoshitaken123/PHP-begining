<?php declare(strict_types=1); ?>
<body>
  <?php
    $matched = [];
    
    echo '住所から郵便番号を見つける', PHP_EOL;
    $address = '123-4567 東京都豊島区...'; 
    // PREG_OFFSET_CAPTURE このフラグを設定した場合、各マッチに対応する文字列のオフセットも(バイト単位で)返されます
    preg_match('/\A[0-9]{3}\-{0-9}\-{0-9}{4}/u', $address, $matched, PREG_OFFSET_CAPTURE);
    // \A文字列の始端
    // [0-9]{3} 0~9の連続する3文字
    // 123-4567
    print_r($matched);
  ?>
</body>