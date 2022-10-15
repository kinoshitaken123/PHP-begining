<body>
  <?php
  $greeting1 = 'hello';
  $greeting2 = &$greeting1;
  $greeting1 = 'world';
  ?>
  <p>$greeting1:<?= $greeting1 ?></p>
  <p>$greeting2:<?= $greeting2 ?></p>
</body>