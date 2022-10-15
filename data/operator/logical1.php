<body>
  <?php
  $temperature = 39;

  $isSuitable = $temperature >= 40 && $temperature <= 41;
  var_dump($temperature);

  $isNotSuitable = $temperature < 40 || $temperature > 41;
  var_dump($isNotSuitable);

  $isNotSuitable = !($temperature >= 40 && $temperature <= 41);
  var_dump($isNotSuitable);
  ?>
</body>