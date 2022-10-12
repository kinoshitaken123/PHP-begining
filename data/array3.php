<body>
  <?php
  $airports = [
    [
      'name' => '羽田',
      'address' => '東京都'
    ],
    [
      'name' => '成田',
      'address' => '千葉県'
    ],
    [
      'name' => '中部国際',
      'address' => '愛知県'
    ]
  ];

  $airports[] =
    [
      'name' => '関西国際',
      'address' => '大阪'
    ]
  ?>
  <p>
  <pre><?php print_r($airports); ?></pre>
  </p>
</body>