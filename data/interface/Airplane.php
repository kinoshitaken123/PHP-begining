<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';
require_once dirname(__FILE__) . '/Walkable.php';

class Airplane implements Flyable
{
  public function fly(): void
  {
    echo 'Bird is flying..';
  }

  public function walk(): void
  {
    echo 'Bird is Walking..';
  }
}
