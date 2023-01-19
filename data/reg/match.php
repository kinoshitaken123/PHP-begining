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

    echo '文字列から16進数表記のカラーコードを見つける', PHP_EOL;
    $string = 'darkviolet - 濃いすみれ色 - #9400d3a';
    preg_match('/#[0-9a-f]{6}/ui', $string, $matched, PREG_OFFSET_CAPTURE);
    // 9400d3aとマッチ
    print_r($matched);

    echo '半角英数字のみを入力チェックする', PHP_EOL;
    $input = '0-3-９９９９-0000';
    if (preg_match('/\A[0-9\-]+\z/u/', $input)){
      echo '入力に問題ありません';
    } else {
      echo '半角文字とハイフンのみで入力してください';
    }
  ?>
</body>