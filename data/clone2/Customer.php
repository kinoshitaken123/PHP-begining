<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Address.php';

class Customer
{
  public $name;

  public $address;

  public function __construct(string $name, Address $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  public function changeName(string $name): void
  {
    $this->name = $name;
  }

  public function changeAdress(string $prefecture, string $city): void
  {
    $this->address->$prefecture = $prefecture;
    $this->address->city = $city;
  }
}
