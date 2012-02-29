<?php
require_once(__DIR__ . "/../myautoload.php");

class MinimalDifferenceStrategyTest extends PHPUnit_Framework_TestCase
{
	public function testReduce() {
		$lines = array(
			$this->getMockLine('foo', 1, 3),
			$this->getMockLine('bar', 2, 1),
			$this->getMockLine('foo bar', 6, 3),
		);

		$strategy = new MinimalDifferenceStrategy();
		$solution = $strategy->reduce($lines);
		$this->assertEquals($lines[1]->getName(), $solution->getName());
	}

	private function getMockLine($name, $arg1, $arg2) {
		$line = $this->getMock('LineInterface');
		$line->expects($this->any())
			->method('getName')
			->will($this->returnValue($name));
		$line->expects($this->any())
			->method('getArg1')
			->will($this->returnValue($arg1));
		$line->expects($this->any())
			->method('getArg2')
			->will($this->returnValue($arg2));
		return $line;
	}
}