<?php

declare(strict_types=1); ?>

<body>
  <?php
  $greeting = 'Good';

  // クロジャーの定義。useを使って$greetingを引き継ぐ
  $greetingMaker = function ($time) use (&$greeting) {
    print $greeting . '' . $time . '<br>';
  };

  $greetingMaker('Morning');

  $greeting = 'Beatutiful';
  $greetingMaker('Evening');
  ?>
</body>