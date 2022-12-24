<?php
declare(strict_types=1);

require_once dirname(__FILE__) . 'ClassB.php';

class ClassB
{
  public function methodB(): void
  {
    throw new Exception('methodBでエラー発生');
    echo 'methodB compleated';
  }
}