<?php declare(strict_types=1); ?>
<body>
  <?php
  // 文字数ではなく文字幅でカットすることに注意
  // 全角文字（全角ひらがな、全角カタカナ,漢字）は二文字とカウント
    $item = '万能MIXER--ご自宅で簡単にジュースやスムージーに、なんとふりかけまで！';
    echo mb_strimwidth($item, 0, 20, '...');
  ?>
</body>