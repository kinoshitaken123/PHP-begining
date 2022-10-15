<body>
  <?php $point = 85; ?>
  <?php
      var_dump($point == 85); //true
      var_dump($point == '85'); //true
      var_dump($point === 85); //true
      var_dump($point === '85'); //false
      var_dump($point != 85); //false
      var_dump($point != '85'); //false
      var_dump($point !== 85); //false
      var_dump($point !== '85'); //true
      var_dump($point > 85); //false
      var_dump($point >= 85); //false
      var_dump($point > '85'); //false
      var_dump($point >= '85'); //false
  ?>
</body>