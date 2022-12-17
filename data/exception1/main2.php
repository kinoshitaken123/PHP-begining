<?php declare(strict_types=1); ?>
<body>
  <?php
    require_once dirname(__FILE__) . '/TaxCalculator.php';
    $calculator = new TaxCalculator();
    try {
      $priceWithTax = $calculator->calculate(100, -0.08);
    } catch (Exception $exception) {
      echo '税込み金額が計算出来ませんでした。理由:', $exception->getMessage(), PHP_EOL;
    } finally {
      $calculator->reset();
    }
    echo 'プログラミング処理を終了します';
  ?>
</body>