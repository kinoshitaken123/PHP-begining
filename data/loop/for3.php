<body>
  <pre>
    <?php
    for ($i = 0; $i < 3; $i++) {
      for ($j = 0; $j < 2; $j++) {
        echo '$i:', $i, '$j:', $j, PHP_EOL;
        if ($i === 2 && $j === 1) {
          echo 'これが最後のループです', PHP_EOL;
        }
      }
    }
    ?>
  </pre>
</body>