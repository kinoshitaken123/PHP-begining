<?php declare(strict_types=1); ?>
<body>
  <?php
    // true
    var_dump(file_exists('files/note.txt')); 
    // false
    var_dump(file_exists('files/gost.txt')); 
  ?>
</body>