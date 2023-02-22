<?php

namespace App\Services\Interfaces;

interface RequiredRemainderServiceInterface {

  public function getRequiredRemainderList( array $inputList ): array;
  
  public function calculateRequiredRemainder( int $modulo, int $remainder, int $maxValue ) : int;
}
