<?php

declare(strict_types=1); ?>

<body>
  <?php
  class Task
  {
    public $name;
  }

  function changeTask(Task $task)
  {
    $task->name = '散歩';
  }

  $task1 = new Task();
  $task1->name = 'パスポートの更新';

  $task2 = clone $task1;
  $task2->name = '買い物';

  // パスポートの更新が出力
  echo $task1->name, PHP_EOL;

  changeTask(clone $task2);

  echo $task1->name, PHP_EOL;

  // パスポートの更新が出力
  echo $task1->name, PHP_EOL;
  // 買い物が出力
  echo $task2->name, PHP_EOL;
  ?>
</body>