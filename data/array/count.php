<?php declare(strict_types=1); ?>
<body>
  <?php
      $chars = ['a', 'b', 'c'];
      echo count($chars); 
      
      $user = [
        'name' => 'tanaka',
        'age'  => 20,
        'hobbies' => ['魚釣り', 'book', '音楽']
      ];

      echo count($user);
  ?>
</body>