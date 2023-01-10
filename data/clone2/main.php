<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__) . 'Customer.php';
    require_once dirname(__FILE__) . 'Address.php';
    $cutomer1 = new Customer('山田太郎', new Address('東京都', '品川区'));
    print_r($customer);
  ?>
</body>