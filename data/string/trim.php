<body>
  <?php
    $greeting = ' こんにちは';
    var_dump(trim($greeting));
    $greeting = '  こんにちは\t\r\n'; 
    var_dump(trim($greeting));
  ?>
</body>