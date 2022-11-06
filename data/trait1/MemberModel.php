<?php

declare(strict_types=1);

require_once dirname(__FILE__) . 'LoggingTrait.php';

class MeberModel
{
  // traitのプロパティ・メソッドを自身に差し込む
  use LoggingTrait;

  public function __construct()
  {
    $this->logFileName = 'my-log.log';
  }

  public function create(string $memberId): void
  {
    $this->log("created($memberId)." . PHP_EOL);
  }

  public function delete(string $memberId): void
  {
    $this->log("deleted($memberId)." . PHP_EOL);
  }
}
