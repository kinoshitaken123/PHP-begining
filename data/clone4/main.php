<?php declare(strict_types=1); ?>
<body>
  <?php
  class Task
  {
    public $name;
  } 

  $task1 = new Task();
  $task1->name = 'パスポートの更新';
  $task2 = $task1;
  // cloneを使ってコピーした場合、コピー元とコピー先のインスタンスのリファレンス先が異なるので一致
  // 演算子による比較では真とならない。
  $task3 = clone $task1;

  var_dump($task1 == $task2); // true
  var_dump($task1 === $task2); // true

  var_dump($task1 == $task3); // true
  var_dump($task1 === $task3); // false
  ?>
</body>