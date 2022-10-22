<?php
  function calcAge(int $birtday): int
  {
    return (int)((date('ymd') - $birtday) / 10000);
  }
