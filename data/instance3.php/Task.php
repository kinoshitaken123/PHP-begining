<?php

declare(strict_types=1);

class Task
{
  public $name;

  public $priority;

  public $progress;

  public function showTaskName(): string
  {
    if ($this->progress >= 100) {
      return '<b>' . $this->name . '</b>';
    } else {
      return $this->name;
    }
  }
}
