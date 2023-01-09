<?php
declare(strict_types=1);

class Address{
  public $prefecture;
  public $city;

  public function __construct(string $prefecture, string $city)
  {
    $this->prefecture = $prefecture;
    $this->city = $city;
  }
}
?>