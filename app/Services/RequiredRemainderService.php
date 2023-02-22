<?php

namespace App\Services;

use App\Services\Interfaces\RequiredRemainderServiceInterface;
use Exception;

class RequiredRemainderService implements RequiredRemainderServiceInterface {

  public function __construct() {}

  public function getRequiredRemainderList( array $inputList ): array {

    $result = [];

    foreach( $inputList as $input ) {

      $inputEntry = [
        'modulo'    => $input[ 0 ],
        'remainder' => $input[ 1 ],
        'max_value' => $input[ 2 ],
        'result'    => 0,
      ];

      try {

        $inputEntry[ 'result' ] = $this->calculateRequiredRemainder(
          $input[ 0 ],
          $input[ 1 ],
          $input[ 2 ],
        );

      } catch ( Exception $e ) {
        $inputEntry[ 'result' ] = $e->getMessage();
      }

      $result[] = $inputEntry;

    }

    return $result;

  }
  
  public function calculateRequiredRemainder( int $modulo, int $remainder, int $maxValue ): int {

    $this->validateInput( $modulo, $remainder, $maxValue );

    $result = 0;

    for ( $i = $maxValue; $i > 0; $i-- ) {

      if ( $i % $modulo == $remainder ) {
        $result = $i;
        break;
      }
    }

    return $result;

  }

  private function validateInput( int $modulo, int $remainder, int $maxValue ): void {

    $errors = 0;

    if ( !is_numeric( $modulo ) ) $errors++;
    if ( !is_numeric( $remainder ) ) $errors++;
    if ( !is_numeric( $maxValue ) ) $errors++;
    if ( $modulo < 0 ) $errors++;
    if ( $remainder < 0 ) $errors++;
    if ( $maxValue < 0 ) $errors++;

    if ( $errors > 0 ) {
      throw new Exception( 'Invalid input' );
    }
  }

}
