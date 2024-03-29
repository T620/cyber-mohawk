<?php
  namespace CyberMohawk;

  class DamageReporter {
    /*
    Returns an array which contains different damage report messages
    based on a 1-100 index.
    */
    public function generate(){
      /*
        Prepares the initial data structure
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

      while ($index <= $nItems + 1){
        $message = $this -> determineMessage($index, $factors, $messages);
        array_push($report, $message);
        $index++;
      }
      
      return $report;
    }

    
    public function determineMessage($index, $factors, $messages){
      /* determines which type of message should be returned based on the factors provided from determineMultiples
      */

      $multipleOf = $this -> determineMultiples($index, $factors);
      $message = ""; // shouldn't declare more than once
    
      if ($multipleOf['three'] || $multipleOf['five'] || $multipleOf['both']) {
        if ($multipleOf['both']){
          $message = $messages[2];
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
      else{
        // naaay
        $message = $messages[3];
      }
      return $message;
    }
    
    public function determineMultiples($index, $factors) {
      /*
        returns three facts:
        multiple of three, five and (three and five)
      */

      $multipleOf = array(
        "three" => false,
        "five" => false,
        "both" => false
      );

      for ($counter = 0; $counter <= sizeOf($factors); $counter++){
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

        if ($multipleOf['three'] && $multipleOf['five']){
          $multipleOf['both'] = true;
        }

        // technically, we're still in the first instance of the loop
        // so we just need to return out now

        return $multipleOf;
      }
    }
  }