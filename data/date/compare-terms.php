<?php declare(strict_types=1); ?>
    <body>
        <?php  
            // 期間１は、2019-02-01~2019-02-28
            $termStart = new DateTime('2019-02-01 00:00:00');
            $termEnd = new DateTime('2019-02-28 23:59:59');

            // 期間2は、2019-01-01~2019-02-10
            $termStart = new DateTime('2019-01-01 00:00:00');
            $termEnd = new DateTime('2019-02-10 23:59:59');

            // 期間1(開始) <= 期間2(終了) && $termEnd >= $term2Start 
            if ($termStart <= $term2End && $termEnd >= $term2End) {
              echo '2つの期間は重なり合ってます', PHP_EOL;
            } else {
              echo '2つの期間は重なりあっていません, PHP_EOL';
            }
        ?>
    </body>