<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/SomeTraitA.php';
  require_once dirname(__FILE__) . '/SomeTraitB.php';
  class SomeClass
  {
    use SomeTraitA, SomeTraitB
    public function setTraitProperty()
    {
      // どちらのトレイとが持つtraitmethodのことか分からないため、エラーとなる
      $this->staticMethod(null, null);
      echo $this->traitProperty;
    }
  }

  $someClass = new SomeClass();
  $someClass->setTraitProperty();
  ?>
</body>