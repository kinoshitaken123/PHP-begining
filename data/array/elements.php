<?php declare(strict_types=1); ?>
<body>
  <?php  
      $chars = ['a', 'b', 'c'];

      echo '●配列に要素を追加する', PHP_EOL;
      $chars[] = 'd';
      // 一回で複数要素を追加できる
      array_push($chars, 'e', 'f', 'g'); 
      print_r($chars);

      echo '●配列の最初に要素を追加する', PHP_EOL;
      $chars[] = 'd';
      array_unshift($chars, 'Z', 'Y', 'X'); 
      print_r($chars);

      echo '●2つの配列を合成する', PHP_EOL;
      $chars = array_merge($chars, ['h','i', 'j']);
      print_r($chars);

      echo '●配列の先頭の要素を取り出す', PHP_EOL;
      $headElement = array_shift($chars);
      print_r($chars);

      echo '●配列の末尾の要素を取り出す', PHP_EOL;
      $lastElement = array_pop($chars);
      print_r($chars);

      echo '●配列のキー番号2から5要素分,切り出す', PHP_EOL;
      $lastElement = array_slice($chars, 2,5);
      print_r($chars);

      
      echo '●配列のキー番号2から5要素を削除する', PHP_EOL;
      unset($chars[2]);
      print_r($chars);
  ?>
</body>