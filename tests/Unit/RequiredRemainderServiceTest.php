<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\RequiredRemainderService;
use Exception;

class RequiredRemainderServiceTest extends TestCase
{

    private $sut = null;


    public function setUp(): void {
        parent::setUp();
        
        $this->sut = new RequiredRemainderService();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_calculateRequiredRemainderReturnsANumber()
    {

        $testModulo = 7;
        $testRemainder = 5;
        $testMaxValue = 12345;

        $result = $this->sut->calculateRequiredRemainder(
            $testModulo,
            $testRemainder,
            $testMaxValue
        );

        $this->assertIsInt( $result );
        
    }

    /**
     * @expectedException Exception
     */
    public function test_calculateRequiredRemainderThrowsExceptionOnInvalidInput()
    {

        $this->expectException( Exception::class );

        $testModulo = -7;
        $testRemainder = 5;
        $testMaxValue = 12345;

        $result = $this->sut->calculateRequiredRemainder(
            $testModulo,
            $testRemainder,
            $testMaxValue
        );
        
    }

    public function test_getRequiredRemainderListReturnsAnArray()
    {

        $inputList = [
          [ 7, 5, 12345, ],
          [ 5, 0, 4, ],
          [ 10, 5, 15, ],
          [ 17, 8, 54321, ],
          [ 499999993, 9, 1000000000, ],
          [ 10, 5, 187, ],
          [ 2, 0, 999999999, ],
        ];

        $result = $this->sut->getRequiredRemainderList( $inputList );

        $this->assertIsArray( $result );
        
    }

    public function test_getRequiredRemainderListReturnsAnErrorInResultIndex()
    {

        $inputList = [
          [ -7, 5, 12345, ],
        ];

        $result = $this->sut->getRequiredRemainderList( $inputList );

        $this->assertEquals( 'Invalid input', $result[ 0 ][ 'result' ] );

        
    }
}
