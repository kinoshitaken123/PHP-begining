<?php

declare(strict_types=1); ?>

<body>
  <?php
  // デフォルト引数なしの引数よりも右側に記載する必要がある
  function calcPriceWithTax(int $price, float $tax = 0.08): float
  {
    $result = $price * (1 + $tax);
    return $result;
  }

  $priceWithTax = calcPriceWithTax(1000);
  echo "<p>計算結果: {$priceWithTax}</p>";

  $priceWithTax = calcPriceWithTax(1000, 0.05);
  echo "<p>計算結果: {$priceWithTax}</p>";
  ?>
</body>