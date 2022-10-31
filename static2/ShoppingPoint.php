<?php
declare(strict_types=1);

class ShoppingPoint
{
  public static $point; //　静的プロパティ

  public static function countUpPoint()
  {
    self::$point++;
  }
}