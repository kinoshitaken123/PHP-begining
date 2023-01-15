<?php declare(strict_types=1); ?>
<body>
  <?php
      $sequence = 1234;
      $code = str_pad($sequence, 7, '0', STR_PAD_LEFT); //0001234
      var_dump($code);  

      $price = 920;
      $priveField = str_pad($price, 8, ''); //[920     ]
      var_dump($priveField);
  ?>
</body>