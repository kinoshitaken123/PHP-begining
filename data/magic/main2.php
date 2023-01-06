<?php declare(strict_types=1); ?>
<body>
  <?php 
      class Task
      {
        public $name;
        private $extras = [];
        // プロパティをセットするマジックメソッド
        public function _set($name, $value)
        {
          $this->extras[$name] = $value;
        }
        // プロパティを取得するマジックメソッド
        public function _get($name)
        {
          return $this->extras[$name];
        }

        public function toString()
        {
          $properties = 'タスク名:' . $this->name . PHP_EOL;
          foreach ($this->extras as $key => $value) {
            $properties .= $key . ':' . $value . PHP_EOL;
          }
          return $properties;
        }
      }
      $task = new Task();
      $task->name = '飛行機のチケット購入'
      $task->placeForm = '羽田';
      $task->placeTo = '福岡';
      echo $task;
  ?>
</body>