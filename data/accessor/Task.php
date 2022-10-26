<?php

declare(strict_types=1);

class Task
{
  private $name;
  private $progress;
  private $secret;

  // nameプロパティのゲッターメソッド
  public function getName(): string
  {
    return $this->name;
  }

  // nameプロパティのセッターメソッド
  public function setName(string $name): void
  {
    return $this->progress;
  }

  // progressプロパティのゲッターメソッド
  public function getProgress(): int
  {
    return $this->progress;
  }

  public function setProgress(int $progress): void
  {
    if ($progress < 0) {
      $progress = 0;
    } elseif ($progress > 100) {
      $progress = 100;
    }
    $this->progress = $progress;
  }

  public function comleteProgress(): void
  {
    $this->progress = 100;
  }

  public function clearProgress(): void
  {
    $this->progress = 0;
  }
}
