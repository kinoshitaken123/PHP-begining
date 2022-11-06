<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/MemberModel.php';
  $memberModel = new MeberModel();
  $memberModel->create('0001');
  $memberModel->delete('0001');
  echo n12br(file_get_contents('MemberModel.log'));
  ?>
</body>