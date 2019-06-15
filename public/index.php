<?php
  declare(strict_types=1);
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  $damageReporter = new \CyberMohawk\DamageReporter();

?>
<!doctype html>
  <head>
    <title>Cyberhawk: Damage report for XC_11_T173_NORTH_SEA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/styles.css">
    
  </head>
  <body>

    <header>
      <nav class="nav">
        <span class="nav__menu">
          menyoo
        </span>
        <span class="nav__brand">
          Cyberhawk
        </span>
        <span class="nav__profile">
          me
        </span>
      </nav>
      
      <div class="jumbotron" id="page-top">
        <h1>Turbine Damage Reports</h1>
        <h3>Those turbines don't repair themselves</h3>
      </div>
    </header>

    <section>
      
      <div class="container">
        <h4>Hi Josh, You have <a href="#report">one</a> new damage report.</h4>
        
        <h3 class="block">Quick Stats</h3>
        <div class="quick-stats">
          <div class="stat">
            <div class="stat-round">
                <p class="title">12</p>
                <span>^</span>
            </div>
            <p class="sub">More coating damage reports since last month</p>
          </div>
          
          <div class="stat">
            <div class="stat-round">
                <p class="title">3</p>
                <span>v</span>
            </div>
            <p class="sub">Fewer lightning strike reports than last month</p>
          </div>
          
          <div class="stat">
            <div class="stat-round">
                <p class="title">50</p>
                <span>%</span>
            </div>
            <p class="sub">Increase in overall damage reports since last year</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h3 class="block">Map</h3>
        
        <div class="map-wrapper">
          <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1PsPcOfp84imuJ2-asPN94v-xOlT-kxhj" width="100%" height="100%"></iframe>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h3 class="block">Full Report</h3>
        <div class="report">
          <div class="report__header">
            <h2>Damage Report for: XC_11_T173_NORTH_SEA</h2>
          </div>
          <div class="report__content">
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
          </div>
          <div class="report__notes">
            <h3>Engineer Notes:</h3>
            <p>This turbine needs some serious attention!</p>		</div>
          <div class="report__footer">
            <a href="#0">Print Report</a>
            <span>Copyright 2019 Cyberhawk</span>
          </div>
        </div>
      
        <a class="centered" href="#page-top">Back to top</a>
      </div>
    </section>

    <section>
      <div class="container">
        <p class="centered">Impressed yet?</p>
      </div>
    </section>
    
          </body>
  <footer class="footer">
    <span class="copy">Cyberhawk 2019</span>
    <span class="credit">Created By Josh Tait</span>
  </footer>
