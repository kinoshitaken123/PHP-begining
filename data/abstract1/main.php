<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/DigitalClook.php';
  $currentTime = strtotime('2018-08-22 17:15');
  $digitalClock = new DigitalClock();
  $digitalClock->setTime($currentTime);
  echo $digitalClock->show();
  ?>
</body>