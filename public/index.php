<?php
  declare(strict_types=1);
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  $damageReporter = new \CyberMohawk\DamageReporter();

?>
<!doctype html>
  <h1> Hey! </h1>

  <?php  $damageReporter->initalize(); ?>
</html>