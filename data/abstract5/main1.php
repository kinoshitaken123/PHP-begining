<?php

declare(strict_types=1); ?>

<body>
  <?php
  class SuperClass
  {
    protected $detail;
    public function __construct(string $detail)
    {
      $this->detail = $detail;
      echo $this->detail;
    }
  }
  class SubClass extends SuperClass
  {
  }
  $subClass = new SubClass('This is detail.');
  ?>
</body>