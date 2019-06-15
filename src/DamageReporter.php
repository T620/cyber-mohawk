<?php
  declare(strict_types=1);

  namespace CyberMohawk;

  class DamageReporter {
    /*
    Returns an array which contains different damage report messages
    based on a 1-100 index.
  */
    public function initalise(): void {
      /*
        prepares the initial data structure
        Iterates over nItems
        Creates a report message based on current index of nItems
        Appends messsage to report array
        Returns report
      */
      echo 'Hello, autoloaded world!';
      exit;
    }

    private function determineMultiples($index, $factors): void {
      /*
        returns three facts:
        multiple of three, five and (three and five)
      */
      
      exit;
    }

    private function determineMessage($factors, $messages): void{
      /* determines which type of message should be returned based on the factors provided from determineMultiples
      */
      exit;
    }
  }