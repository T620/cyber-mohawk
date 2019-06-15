<?php
  //declare(strict_types=1);

  //namespace CyberMohawk;

  class DamageReporter {
    /*
    Returns an array which contains different damage report messages
    based on a 1-100 index.
    */

    public function initalize(){
      /*
        prepares the initial data structure
        Iterates over nItems
        Creates a report message based on current index of nItems
        Appends messsage to report array
        Returns report
      */
      $messages = ["Coating Damage", "Lightning Damage", "Coating & Lightning Damage", "No Damage"];
      $report = [];
      $factors = [3, 5];
      $index = 1;
      $nItems = 100;
      $message = "";


      while ($index <= $nItems){
        echo "current index: " + $index;
        $message = determineMessage($index, $factors, $messages);
        $report.push($message);
        $index++;
      }
      echo 'report: ';
      return $report;
    }

    
    private function determineMessage($index, $factors, $messages){
      /* determines which type of message should be returned based on the factors provided from determineMultiples
      */
      $multipleOf = determineMultiples($index, $factors);
      $message = ""; // shouldn't declare more than once

      // no point doing unnecessary work (logic) if we already know the answer
      if (!$multipleOf['three'] || !$multipleOf['five'] || !$multipleOf['both']) {
        $message = $messages[4]; // yay!
      }
      else{
        // naaay
        // There's either going to be both sets of damage (two)
        if ($multipleOf['both']){
          $message = $messages[3];
        }
        // or either (one)
        else{
          if ($multipleOf['five']){
            $message = $messages[1];
          }
          else{
            $message = $messages[0];
          }
        }
      }
      echo "message: " + $message;
      return $message;
    }
    
    private function determineMultiples($index, $factors) {
      /*
        returns three facts:
        multiple of three, five and (three and five)
      */

      $multipleOf = [
        "three" => false,
        "five" => false,
        "both" => false
      ];

      for ($counter = 0; $counter <= $factors.length(); $counter++){
        $modulus = $index % $factors[$counter];

        if ($modulus === 0){
          // doesn't get much more readable than this, eh?
          $multipleOf['three'] = true;
        }

        $counter++;

        $modulus = $index % $factors[$counter];

        if ($modulus === 0){
          $multipleOf['five'] = true;
        }

        if ($multipleOfThree && $multipleOfFive){
          $multipleOf['both'] = true;
        }

        // technically, we're still in the first instance of the loop
        // so we just need to return out now
        // will refactor later so we can maybe have more factors

        return $multipleOf;
      }
    
    }
  }