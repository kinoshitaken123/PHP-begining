<?php declare(strict_types=1); ?>
<body>
  <?php  
    echo '文字列を一文字ずつに分解する', PHP_EOL;
    $chares = preg_split('//u', 'こんにちは HELLO', -1, PREG_SPLIT_NO_EMPTY);
    print_r($chares);

    echo '文字列を改行で分解する', PHP_EOL;
    $diary = <<<TEXT
    2019.3.13
    今日は雨が降っています。
    春が近づいているようです。
    TEXT;
    $lines = preg_split("/(\r\n|\r|\n)/u", $diary);
    print_r($lines);

    echo '文字列を半角または全角スペースで分解する', PHP_EOL;
    $words = preg_split("/[　　]/u", 'あいうえお　かきくけこ　さしすせそ');
    print_r($words);
  ?>
</body>