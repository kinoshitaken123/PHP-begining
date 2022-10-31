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

    public function instanceMethod()
    {
      echo 'instanceMethod() called', PHP_EOL;
    }

    // 静的メソッド
    public static function staticMethod()
    {
      // 自分自身のインスタンスを作り、インスタンスメソッドを呼び出す
      $someClass = new SomeClass();
      $someClass->instanceMethod();

      $externalClass = new ExternalClass();
      $externalClass->externalMethod();
      }
    }

    // 外部のクラス
    class ExternalClass
    {
      public function externalMethod()
      {
        echo 'externalMethod() calle.', PHP_EOL;
      }
    }
  }

  SomeClass::staticMethod();
  ?>
</body>