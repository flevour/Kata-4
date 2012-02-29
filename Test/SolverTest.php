<?php
require_once(__DIR__ . "/../myautoload.php");

class SolverTest extends PHPUnit_Framework_TestCase
{

    public function testSolver()
    {
    	$data = $this->getMock('DataInterface');
    	$strategy = $this->getMock('StrategyInterface');
    	$result = $this->getMock('ResultInterface');

    	$data->expects($this->once())
    		->method('getLines')
    		->will($this->returnValue($lines = array(
    		)));
    	$strategy->expects($this->once())
    		->method('reduce')
    		->with($lines)
    		->will($this->returnValue($result));
    	$result->expects($this->once())
    		->method('__toString')
    		->will($this->returnValue('day 5 (min 3, max 7)'));

    	$solver = new Solver($data, $strategy);
    	$this->assertEquals("Result: day 5 (min 3, max 7)", $solver->solve());
    }
}