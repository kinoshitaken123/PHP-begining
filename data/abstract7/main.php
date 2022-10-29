<?php

declare(strict_types=1);

use DigitalClock as GlobalDigitalClock;

?>

<body>
  <?php
  // abstract　抽象的な
  abstract class Clock
  {
    private $time;

    public function __construct(int $time)
    {
      echo 'Clockクラスのコンストラクタが呼ばれました', PHP_EOL;
      $this->time = $time;
    }
  }
  class DigitalClock extends Clock
  {
    private $color;
    // コンストラクタ
    public function __construct(int $time, string $color) //初めに実行される
    {
      echo 'DigitalClockクラスのコンストラクタが呼ばれました', PHP_EOL;
      $this->color = $color;
      parent::__construct($time); //スーパークラスのコンストラクタをコールしている
    }
  }
  $currentTime = strtotime('2018-08-22 17:15');
  $digitalClock = new DigitalClock($currentTime, 'yellow');
  ?>
</body>