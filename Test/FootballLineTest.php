<?php

class FootballLineTest extends PHPUnit_Framework_TestCase {
	public function testShouldIsolateDataCorrectly() {
		$line = new FootballLine('    1. Arsenal         38    26   9   3    79  -  36    87');
		$this->assertEquals('Arsenal', $line->getName());
		$this->assertEquals(79, $line->getArg1());
		$this->assertEquals(36, $line->getArg2());
	}
}