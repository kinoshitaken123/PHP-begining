<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/PageNotFoundException.php';

  class UserModel
  {
    public function findProfile(int $userId): array
    {
      throw new PageNotFoundException('User profile does not exist.');
    }
  }

  $model = new UserModel();
  try {
    $profile = $model->findProfile(1001);
  } catch (PageNotFoundException $exception) {
    echo file_get_contents('error-page-not-found.html');
    return;
  }
  ?>
</body>