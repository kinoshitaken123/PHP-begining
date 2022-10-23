<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/Task.php';
  $task = new Task('パスポート更新');
  var_dump($task);
  echo $task->name, PHP_EOL;
  echo $task->priority, PHP_EOL;
  echo $task->progress, PHP_EOL;
  ?>
</body>