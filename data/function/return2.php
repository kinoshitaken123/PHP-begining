<body>
  <?php
  function findImageExtension($extensions)
  {
    foreach ($extensions as $extension) {
      if ($extension == 'jpg' || $extension == 'gif' || $extension == 'png') {
        return $extension;
      }
      return 'NOT FOUND';
    }

    $extensions = ['pdf', 'dock', 'gif', 'exe'];
    $foundImageExtension = findImageExtension($extensions);
    echo $foundImageExtension;
  }
  ?>
</body>