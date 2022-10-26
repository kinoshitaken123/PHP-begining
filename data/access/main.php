<body>
  <?php
  class SomeClass
  {
    public $propertyA;
    private $propertyB;

    public function methodA(): void
    {
      echo 'methodA called.', PHP_EOL;
      $this->methodB();
    }

    private function methodB(): void
    {
      echo 'methodB called.', PHP_EOL;
    }
  }
  $someInstance = new SomeClass();

  $someInstance->propertyA = 'A';
  $someInstance->methodA();

  // $someInstance->propertyB = 'B'; // privateなのでエラー
  // $someInstance->methodB(); // privateなのでエラー
  ?>
</body>