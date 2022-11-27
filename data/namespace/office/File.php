<?php
declare(strict_types=1);

namespace Office;

require_once dirname(__FILE__) . '/word/Writer.php';
require_once dirname(__FILE__) . '/excel/Writer.php';

class File
{
  public function setWordproperty(): void
  {
    $write = new Word\Writer();
    $write->write();
  }

  public function setExcelproperty(): void
  {
    $write = new Excel\Writer();
    $write->write();
  }
}