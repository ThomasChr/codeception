<?php 

namespace App;

include "./src/Dice.php";

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
	    $dice = new Dice();

	    $this->assertEquals($dice->roll(), 1);
    }
}
