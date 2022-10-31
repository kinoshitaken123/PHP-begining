<?php

declare(strict_types=1); ?>

<body>
  <?php
  class SuperClass
  {
    protected $datal;

    public function __construct(string $datal)
    {
      $this->datal = $datal;
      echo $this->datal;
    }
  }
  class SubClass extends SuperClass
  {
    protected $data2;

    public function __construct(string $datal, string $data2)
    {
      $this->datal = $datal;
      $this->data2 = $data2;
      echo $this->datal, $this->data2;
    }
  }
  $subClass = new SubClass('This is datail.', 'This is data2');
  ?>
</body>