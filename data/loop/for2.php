<body>
  <pre>
    <?php
    $lines = [
      'いろはにほへと',
      'ちりねるを',
      'わかよれを'
    ];
    for ($lineNumber = 1; $lineNumber <= count($lines); $lineNumber++) {
      echo $lineNumber, '行目:', $lines[$lineNumber - 1], PHP_EOL;
    }
    ?>
  </pre>
</body>