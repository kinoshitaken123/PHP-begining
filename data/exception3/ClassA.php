<?php
declare(strict_types=1);

require_once dirname(__FILE__) . 'ClassB.php';

class ClassA
{
  public function methodA(): void
  {
    $classB = new ClassB();
    try {
      $classB->methodB();
    } catch (Exception $exception) {
      echo 'methodAで例外をキャッチ。エラー内容:' , $exception->getMessage(), PHP_EOL;
      throw $exception;
    }
    throw new Exception('methodBでエラー発生');
    echo 'methodA compleated';
  }
}