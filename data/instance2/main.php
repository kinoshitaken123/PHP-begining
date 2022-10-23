<body>
  <?php
  require_once dirname(__FILE__) . '/Task.php';
  require_once dirname(__FILE__) . '/TaskSheet.php';

  $taskSheet = new TaskSheet();

  // TODOタスクパスポートの更新を作る
  $task1 = new Task();
  $task1->name = 'パスポートの更新';
  $task1->progress = 100;
  $taskSheet->addTask($task1);
  //var_dump($task1);

  // TODOタスク
  $task1 = new Task();
  $task1->name = '食材の買い出し';
  $task1->progress = 50;
  $taskSheet->addTask($task2);

  // タスクリストを表示する
  echo PHP_EOL, '●タスクリストを表示します...', PHP_EOL;
  $taskSheet->show();
  ?>
</body>