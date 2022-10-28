<?php

declare(strict_types=1);

use SomeClass as GlobalSomeClass;

?>

<body>
  <?php
  class SomeClass
  {
    // 静的メソッドと静的プロパティは、自クラスのインスタンスメソッド/インスタンスプロパティを使うことが出来ない。
    private $instanceProperty;

    // 静的メソッド
    public static function staticMethod()
    {
      $this->instanceProperty = 1;
    }
  }

  GlobalSomeClass::staticMethod();
  ?>
</body>