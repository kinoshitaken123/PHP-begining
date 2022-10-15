<pre>
  <?php
  $greeting = null; 
  $message = $greeting === null ? "Hello" : $greeting;
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = 'Good Moning'; 
  $message = $greeting === null ? "Hello" : $greeting;
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = null; 
  $message = $greeting ?? 'hello';
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = 'Good Moning'; 
  $message = $greeting ?? 'hello';
  echo 'あいさつは', $message, PHP_EOL;
  ?>
</pre>
