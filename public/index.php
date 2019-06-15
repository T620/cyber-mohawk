<?php
  declare(strict_types=1);
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  $damageReporter = new \CyberMohawk\DamageReporter();

?>
<!doctype html>
  <h1> Damage report for XC_11_T173_NORTH_SEA </h1>
  <table class='table'>
    <tr>
      <td>
        Location Ref #
      </td>
      <td>
        Damage (if any)
      </td>
    </tr>
    <?php 
      $report = $damageReporter->generate();

      for ($counter = 1; $counter < sizeOf($report); $counter++){
        echo "<tr> <td>";
        echo $counter;
        echo "</td>";
        echo "<td>";
        echo $report[$counter];
        echo "</td> </>";
      }
    ?>
  </table>
</html>