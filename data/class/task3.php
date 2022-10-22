<?php

declare(strict_types=1);

class Task
{
  public $name;

  public $priority;

  public $progress;

  public function isCompleated(): bool
  {
    return $this->progress >= 100; // $progressが100以上なら真を返す
  }
}
