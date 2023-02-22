<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\RequiredRemainderServiceInterface;
use Illuminate\View\View;

class RequiredRemainder extends Controller {

  /** @var RequiredRemainderServiceInterface **/
  private $service;

  public function __construct( RequiredRemainderServiceInterface $service ) {
    $this->service = $service;
  }
  
  public function index(): View {

    $inputLength = 7;
    $inputList = [
      [ 7, 5, 12345, ],              // expects: 12339
      [ 5, 0, 4, ],                  // expects: 0
      [ 10, 5, 15, ],                // expects: 15
      [ 17, 8, 54321, ],             // expects: 54306
      [ 499999993, 9, 1000000000, ], // expects: 999999995
      [ 10, 5, 187, ],               // expects: 185
      [ 2, 0, 999999999, ],          // expects: 999999998
    ];

    $data = $this->service->getRequiredRemainderList( $inputList );

    return view( 'required_remainder', [ 'data' => $data ] );
  }

}
